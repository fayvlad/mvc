<?php

class Workers_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function userList()
    {
        $sth = $this->db->prepare('SELECT * FROM workers');
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);

    }

    public function create($data)
    {
        $sth = $this->db->prepare('INSERT INTO `workers`(`name`, `soname`, `pname`, `start`, `dolgnost`, `dir`, `address`)VALUES(:name, :soname, :pname, :start, :dolgnost, :dir, :address)');
        $sth->execute(array(
            ':name' => $data['name'],
            ':soname' => $data['soname'],
            ':pname' => $data['pname'],
            ':start' => $data['start'],
            ':dolgnost' => $data['dolgnost'],
            ':dir' => $data['dir'],
            ':address' => $data['address'],
        ));
    }

    public function editSave($data)
    {
        $sth = $this->db->prepare('UPDATE workers SET `name` = :name, `soname` = :soname, `pname` = :pname, `start` = :start, `dolgnost` = :dolgnost, `dir` = :dir, `address` = :address  WHERE id = :id');
        $sth->execute(array(
            ':id' => $data['id'],
            ':name' => $data['name'],
            ':soname' => $data['soname'],
            ':pname' => $data['pname'],
            ':start' => $data['start'],
            ':dolgnost' => $data['dolgnost'],
            ':dir' => $data['dir'],
            ':address' => $data['address'],
        ));
    }

    public function edit($id)
    {
        $sth = $this->db->prepare('SELECT * FROM workers WHERE id = :id');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }

    public function fullinfo($id)
    {
        $sth = $this->db->prepare('SELECT * FROM workers WHERE id = :id');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }

    public function delete($id)
    {
        $sth = $this->db->prepare('DELETE FROM workers WHERE id = :id');
        $sth->execute(array(
            ':id' => $id
        ));
    }

}
