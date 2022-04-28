<?php

use yii\helpers\{Html, HtmlPurifier};

/**@var $services */
?>
<div class="container">
    <div class="row">
        <div class="box">
            <?php foreach ($services as $service) { ?>
                <div class="col-md-6">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <div class="align-center">
                            <h4><?= Html::encode($service->name) ?></h4>
                            <div class="icon">
                                <i class="fa fa-<?= Html::encode($service->code ?? 'list') ?> fa-3x"></i>
                            </div>
                            <p>
                                <?= HtmlPurifier::process($service->text) ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
