<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 10:15
 */
class Bootstrap
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $file = 'controllers/' . $url[0] . '.php';
        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/error.php';
            $controller = new Error();
            return false;
        }
        $controller = new $url[0];
        $controller->loadModel($url[0]);
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                echo 'Error!';
            }
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            } else {
                $controller->index();
            }
        }
    }
}
