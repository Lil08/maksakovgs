<?php

namespace app\controllers;

use app\models\Call;
use app\models\Contact;
use app\models\Description;
use app\models\Services;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     */
    public function actionIndex()
    {
        $services = Services::findAll(['active' => true]);

        $descr = Description::find()->one();

        $model = new Call();
        $model->created = date('now');
        if ($model->load(Yii::$app->request->post()) && $model->validate()&& $model->contact(Yii::$app->params['adminEmail'])) {
            $model->save();
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }

        return $this->render('index', compact('services', 'descr', 'model'));
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new Call();
        $model->created = date('now');
        if ($model->load(Yii::$app->request->post()) && $model->validate()&& $model->contact(Yii::$app->params['adminEmail'])) {
            $model->save();
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        $contact = Contact::find()->one();

        return $this->render('contact', compact('contact', 'model'));
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionServices()
    {
        return $this->render('services');
    }
}
