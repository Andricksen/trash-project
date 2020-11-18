<?php

include_once 'Trash.php';
include_once 'Database.php';
class Ftrash
{


    static function addNewTrash(Trash $trash)
    {
        $con = Database::getConnection();
        $req = $con->prepare('INSERT INTO trash SET long=?,lat=?,address=?,codeTrash=?,typeTrash=?');
        $req->execute(array(
            $trash->getLong(),
            $trash->getLat(),
            $trash->getAddress(),
            $trash->getCodeTrash(),
            $trash->getTypeTrash()
        ));
        return $con->lastInsertId();
    }


    static function updateTrash(Trash $trash)
    {
        $con = Database::getConnection();
        $req = $con->prepare('UPDATE trash SET long=?,lat=?,address=?,codeTrash=?,typeTrash=? WHERE _idTrash=?');
        $req->execute(array(
            $trash->getLong(),
            $trash->getLat(),
            $trash->getAddress(),
            $trash->getCodeTrash(),
            $trash->getTypeTrash(),
            $trash->getId()
        ));
    }

    static function deleteTrash($idTrash)
    {
        $con=Database::getConnection();
        $req=$con->prepare('DELETE FROM trash WHERE _idTrash=?');
        $req->execute(array($idTrash));
    }

    static function getAllTrash()
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM trash');
        $req->execute(array());
        return $req->fetchAll();
    }

    static function getTrashByType($type)
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM trash WHERE typeTrash=?');
        $req->execute(array($type));
        return $req->fetchAll();
    }



}