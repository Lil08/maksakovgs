<?php

use yii\helpers\{Html, HtmlPurifier};

/**
 * @var $contact
 * */
?>

<div class="contact-area">
    <p><?= HtmlPurifier::process($contact->text) ?></p>

    <h4>Адрес:</h4> <?= Html::encode($contact->address) ?><br>
    <h4>Телефон:</h4> <?= Html::encode($contact->phone) ?></br>
    <h4>Почта:</h4> <?= Html::encode($contact->email) ?></br>
</div>

