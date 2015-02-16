<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 10:25
 */
class View
{
    public function __construct()
    {

    }

    public function render($name, $noInclude = false)
    {
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
}

