<?php

use yii\helpers\Html;

/**
 * @var $contact
 * */
?>

<div class="widget">
    <h5 class="widgetheading">Максаков Г.С.</h5>
    <address>
        <?= Html::encode($contact->address) ?>
    </address>
    <p>
        <i class="icon-phone"></i> <?= Html::encode($contact->phone) ?> <br>
        <i class="icon-envelope-alt"></i> <?= Html::encode($contact->email) ?>
    </p>
</div>

