<?php

namespace app\widgets;

use app\models\Services;
use yii\base\Widget;

class ServicesWidget extends Widget
{
    public $view = 'index';

    public function run()
    {
        $services = Services::findAll(['active' => true]);

        return $this->render('services/'.$this->view, compact('services'));
    }
}