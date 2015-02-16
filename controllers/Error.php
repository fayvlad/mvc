<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 10:16
 */
class Error extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->msg = 'Страницы не существует!';
    }

    public function index()
    {
        $this->view->render('error/index');
    }

}
