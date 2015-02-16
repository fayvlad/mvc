<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 17:39
 */
class User_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function userList() {
        $sth = $this->db->prepare('SELECT id, login, role FROM users');
        $sth->execute();
        return $sth->fetchAll();

    }

    public function create($data) {
        $sth = $this->db->prepare('INSERT INTO users(`login`, `password`, `role`)
   VALUES(:login, :password, :role)');
        $sth->execute(array(':login' => $data['login'], ':password' => $data['password'], ':role' => $data['role']));
    }

    public function delete($id) {
        $sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $sth->execute(array(
            ':id' => $id
        ));
    }

}
