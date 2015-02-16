<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 10:11
 */
class Help extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('help/index');
    }


    public function other($arg = false)
    {
        echo "Мы в методе other контроллера Help";
        echo "Параметры: " . $arg;
        require 'models/help_model.php';
        $model = new Help_Model();
    }
}
