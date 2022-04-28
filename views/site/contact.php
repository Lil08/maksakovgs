<?php

/**
 * @var $this yii\web\View
 * @var $form yii\widgets\ActiveForm
 * @var $model app\models\ContactForm
 * @var $contact
 */

use app\widgets\ContactWidget;
use yii\helpers\{Html, HtmlPurifier};
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="recent">
            <button class="btn-primarys"><h3>Контакты</h3></button>
            <hr>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af6594ea3e751bee67cd5f6201927fc80daad76e063f0691bf8fc5dd846ea6ca1&amp;source=constructor"
                    width="100%" height="400" frameborder="0"></iframe>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="recent">
                <button class="btn-primarys"><h3>Обратная связь</h3></button>
            </div>
            <?php $form = ActiveForm::begin(['method' => 'POST']) ?>
            <div class="form-group">
                <?= $form->field($model, 'email')->textInput(['class' => 'form-control', 'placeholder' => 'Введите email'])->label(false) ?>
            </div>
            <?= $form->field($model, 'text')->textarea(['class' => 'form-control', 'placeholder' => 'Введите текст сообщения'])->label(false) ?>
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-default']) ?>
            <?php $form::end() ?>
        </div>

        <div class="col-lg-6">
            <div class="recent">
                <button class="btn-primarys"><h3>Свяжитесь с нами</h3></button>
            </div>
            <?= ContactWidget::widget() ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <hr>
    </div>
</div>
