<?php

/**
 * @var $this yii\web\View
 * @var $descr
 * @var $services
 * @var $model \app\models\Call
 */

use app\widgets\ServicesWidget;
use yii\helpers\{Html, HtmlPurifier};
use yii\widgets\ActiveForm;

$this->title = 'Адвокат Максаков Геннадий Сергеевич';

?>

<!-- Responsive slider - START -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                <div class="slides" data-group="slides">
                    <ul>
                        <li>
                            <div class="slide-body" data-group="slide">
                                <img src="img/slide2.png" alt="">
                                <div class="caption header" data-animate="slideAppearUpToDown" data-delay="500"
                                     data-length="300">
                                    <button class="btn btn-primary"><h2> защищенность клиента</h2></button>
                                    <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200"
                                         data-length="300">
                                        <button class="btn btn-primary"><h4><span>адвокатская тайна, официальный договор, гарантии качества</span>
                                            </h4></button>
                                    </div>
                                    <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="900"
                                         data-length="300">
                                        <button class="btn btn-primary"><h3>приемлемые цены</h3>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-body" data-group="slide">
                                <img src="img/slide1.jpeg" alt="">
                                <div class="caption header" data-animate="slideAppearDownToUp" data-delay="500"
                                     data-length="300">
                                    <button type="button" class="btn btn-primary" data-toggle="button"
                                            aria-pressed="false" autocomplete="off"><h2>эффективность</h2></button>
                                    <div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800"
                                         data-length="300">
                                        <button class="btn btn-primary"><h4>
                                                <span>множество успешно проведенных дел </span>
                                            </h4></button>
                                    </div>
                                    <div class="caption-sub" data-animate="slideAppearRightToLeft" data-delay="1200"
                                         data-length="300">
                                        <button class="btn btn-primary"><h3>профессионализм</h3></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Responsive slider - END -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="contents">
                <h2><span>Юридическая помощь </span></h2>
                <p>Предоставление юридической помощи по вопросам <span>любой сложности</span></p>
            </div>
        </div>
    </div>
</div>

<?= ServicesWidget::widget() ?>

<div class="container">
    <div class="about">
        <div class="row">
            <div class="recent">
                <button class="btn-primarys"><h3>Максаков Геннадий Сергеевич</h3></button>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="row-slider">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                    <div class="col-lg-6 mar-bot30">
                        <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                            <div class="slides" data-group="slides">
                                <img alt="" class="img-responsive" src="img/foto.jpg" width="80%"
                                     height=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                        <div class="thumnails">
                            <h4><?= Html::encode($descr->name) ?></h4>
                            <p><?= HtmlPurifier::process($descr->text) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12" id="call">
            <div class="recent">
                <button class="btn-primarys"><h3>Свяжитесь со мной</h3></button>
            </div>
            <hr>
            <?php $form = ActiveForm::begin(['method' => 'POST']) ?>
            <div class="form-group">
                <?= $form->field($model, 'email')->textInput(['class' => 'form-control', 'placeholder' => 'Введите email'])->label(false) ?>
            </div>
            <?= $form->field($model, 'text')->textarea(['class' => 'form-control', 'placeholder' => 'Введите текст сообщения'])->label(false) ?>
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-default']) ?>
            <?php $form::end() ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <hr>
    </div>
</div>
