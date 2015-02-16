<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 11:11
 */
class Login extends Controller

{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //require 'models/login_model.php';
        // $model = new Login_Model();
        $this->view->render('login/index');
    }

    public function run()
    {
        $this->model->run();
    }
}
