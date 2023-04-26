<?php

/**
 * Class NewsController
 * @package Phpcourse\Myproject\Classes\Controllers
 */

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;

class NewsController implements ControllerMethodName
{

    public function index(): void
    {
        // Створили масив з темами (топіками) форуму
        $topics = [
            [
                'author' => 'Продавец',
                'title' => 'Продам телефон',
                'text' => 'Самсунг А51'
                
            ],
            [
                'author' => 'Продавец',
                'title' => 'Продам автомобиль',
                'text' => 'Рено Логан'
            ],
            [
                'author' => 'Продавец',
                'title' => 'Продам дом',
                'text' => 'Район Жадова 2к'
            ]
        ];
        // Передали масив з темами в шаблон
        $data = ['topics' => $topics, 'page' => 'news'];
        // створили об'єкт класу Rendering, передали в нього масив з темами та назву сторінки
        new Rendering($data);
    }
}