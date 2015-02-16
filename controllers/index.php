<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 10:08
 */
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'INSIDE INDEX INDEX';
    }

    public function details()
    {
        $this->view->render('index/index');
    }


}
