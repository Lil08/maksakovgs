<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\ContactWidget;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <meta name="keywords"
          content="адвокат, юрист, сыктывкар, помощь, права, контакты, коми, гражданский, административный, уголовный, юридический, консультация, услуга, дело ">
    <meta name="description"
          content="Максаков Геннадий Сергеевич. Юридическая помощь и защита граждан в г Сыктывкар и области.">
    <meta name="robots" content="index, nofollow">
    <meta name="yandex" content="noyaca">
    <meta name="yandex-verification" content="f65bef3b4d712a2c"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            <a href="/"><h1>Максаков Г.C.</h1></a>
                        </div>
                    </div>
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="/">Главная</a></li>
                            <li role="presentation"><a href="/services">Юридическая помощь</a></li>
                            <li role="presentation"><a href="/contact">Контакты</a></li>
                            <?php if (!Yii::$app->user->isGuest) { ?>
                                <li role="presentation"><a
                                            href="/admin"><?= Yii::$app->user->identity['username'] ?></a></li>
                                <li role="presentation"><a href="/admin/auth/logout">Выйти</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php $this->beginBody() ?>


<?= $content ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?= ContactWidget::widget(['view' => 'footer']) ?>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Страницы</h5>
                    <ul class="link-list">
                        <li><a href="/services">Юридическая помощь</a></li>
                        <li><a href="/contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Юридическая помощь</h5>
                    <ul class="link-list">
                        <li><a href="/services">Предоставление юридической помощи по вопросам любой сложности</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <hr>
        </div>
    </div>

    <div id="sub-footer">
        <div class="container">
            <div class="copyright">
                <p>
                    <span>&copy; Максаков Геннадий Сергеевич, 2022 </span>
                </p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</footer>

<script>
    wow = new WOW(
        {})
        .init();
</script>

<?php $this->endBody() ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
<?php $this->endPage() ?>
