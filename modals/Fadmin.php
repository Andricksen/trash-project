<?php

include_once 'Admin.php';
include_once 'Database.php';
class Fadmin
{

    static function addNewAdmin(Admin $admin)
    {
        $con=Database::getConnection();
        $req=$con->prepare('INSERT INTO admin SET username=?,password=?,role=?');
        $req->execute(array(
            $admin->getUsername(),
            $admin->getPassword(),
            $admin->getRole()
        ));
        return $con->lastInsertId();
    }

    static function getAllAdmin()
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM admin');
        $req->execute(array());
        return $req->fetchAll();
    }
    static function deleteAdmin($idAdmin)
    {
        $con=Database::getConnection();
        $req=$con->prepare('DELETE FROM admin WHERE _idAdmin=?');
        $req->execute(array($idAdmin));

    }
    static function getInfoAdminById($idAdmin)
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM admin WHERE _idAdmin=?');
        $req->execute(array($idAdmin));
        return $req->fetch();
    }

    static function updateAdmin(Admin  $admin)
    {
        $con=Database::getConnection();
        $req=$con->prepare('UPDATE admin SET username=?,password=?,role=? WHERE _idAdmin=?');
        $req->execute(array(
            $admin->getUsername(),
            $admin->getPassword(),
            $admin->getRole(),
            $admin->getId()
        ));
    }
}