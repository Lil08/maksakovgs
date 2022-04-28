<?php

namespace app\modules\admin\controllers;

use app\models\Services;

class MainController extends AppAdminController
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}