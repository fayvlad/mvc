<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 17.02.2015
 * Time: 10:52
 */
class workers extends Controller
{

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
        if ($logged == true || $role != 'owner') {
            if ($logged == false) {
                Session::destroy();
                header('Location: ../login');
                exit();
            }
        }
    }

    public function index()
    {
        $this->view->userList = $this->model->userList();
        $this->view->render('workers/index');
    }

    public function create()
    {
        $data = array();
        $data['name'] = $_POST['name'];
        $data['soname'] = $_POST['soname'];
        $data['pname'] = $_POST['pname'];
        $data['start'] = $_POST['start'];
        $data['dolgnost'] = $_POST['dolgnost'];
        $data['dir'] = $_POST['dir'];
        $data['address'] = $_POST['address'];
        $this->model->create($data);
        header('Location: ' . URL . '/workers');
    }

    public function fullinfo($id)
    {
        $this->view->workers = $this->model->fullinfo($id);
        $this->view->render('workers/fullinfo');
    }

    public function edit($id)
    {
        $this->view->workers = $this->model->fullinfo($id);
        $this->view->render('workers/edit');
    }

    public function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['name'] = $_POST['name'];
        $data['soname'] = $_POST['soname'];
        $data['pname'] = $_POST['pname'];
        $data['start'] = $_POST['start'];
        $data['dolgnost'] = $_POST['dolgnost'];
        $data['dir'] = $_POST['dir'];
        $data['address'] = $_POST['address'];
        $this->model->editSave($data);
        header('Location: ' . URL . '/workers');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: ' . URL . '/workers');
    }
}

