<?php

use app\widgets\ServicesWidget;

$this->title = 'Юридическая помощь';
$this->params['breadcrumbs'][] = $this->title;
?>
?>

<div class="container">
    <div class="row">
        <div class="recent">
            <button class="btn-primarys"><h3>Юридическая помощь</h3></button>
            <hr>
        </div>
    </div>
</div>

<?= ServicesWidget::widget(['view' => 'services']) ?>

<div class="container">
    <div class="row">
        <hr>
    </div>
</div>