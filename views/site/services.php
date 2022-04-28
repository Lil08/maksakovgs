<?php

use app\widgets\ServicesWidget;

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