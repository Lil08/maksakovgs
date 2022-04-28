<?php

namespace app\widgets;

use app\models\Contact;
use yii\base\Widget;

class ContactWidget extends Widget
{
    public $view = 'index';

    public function run()
    {
        $contact = Contact::find()->one();

        return $this->render('contact/'.$this->view, compact('contact'));
    }
}