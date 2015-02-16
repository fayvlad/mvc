<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 12:05
 */
class User extends Controller
{

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');

        $role = Session::get('role');
        if($logged == true || $role != 'owner') {


            if ($logged == false) {
                Session::destroy();
                header('Location: ../login');
                exit();
            }
        }
    }

    public function index()
    {
        $this->view->render('user/index');

    }


}

