<?php
namespace app\helpers;

class SiteHelper
{
    public static function dump($data)
    {
        return '<pre>' . var_dump($data) . '</pre>';
    }

}