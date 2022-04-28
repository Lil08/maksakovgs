<?php

namespace app\widgets;

use yii\base\Widget;

class MainMenu extends Widget
{
    public function run()
    {
        $menu = [
            'index' => 'Главная',
            'about' => 'О нас',
            'team' => 'Наши адвокаты',
            'call' => 'Обратная связь',
            'contact' => 'Контакты'
        ];

        return $this->render('menu/index', compact('menu'));
    }

}