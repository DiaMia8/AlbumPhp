<?php

namespace app\controller;


class MainController
{

    public $title = '';
    protected $controllerName = '';

    protected function render($view, $data = [])
    {
        extract($data);
        ob_start();
        include("src/app/view/{$this->controllerName}/{$view}.php");
        return ob_get_clean();
    }

}