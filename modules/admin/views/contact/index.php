<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'address',
            'phone',
            'text:ntext',
            'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
