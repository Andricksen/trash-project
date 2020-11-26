<?php

include_once 'Database.php';
include_once 'User.php';
class Fuser
{

    static function addNewUser(User  $user)
    {
        $con=Database::getConnection();
        $req=$con->prepare('INSERT INTO users SET firstname=?,lastname=?,code=?,phone=?,area=?,idPart=?');
        $req->execute(array(
            $user->getFirstname(),
            $user->getLastname(),
            $user->getCode(),
            $user->getPhone(),
            $user->getArea(),
            $user->getIdPart()
        ));
        return $con->lastInsertId();
    }

    static function updateUser(User  $user)
    {

        $con=Database::getConnection();
        $req=$con->prepare('UPDATE users SET firstname=?,lastname=?,code=?,phone=?,area=?,idPart=? WHERE _idUser=?');
        $req->execute(array(
            $user->getFirstname(),
            $user->getLastname(),
            $user->getCode(),
            $user->getPhone(),
            $user->getArea(),
            $user->getIdPart(),
            $user->getId()
        ));

    }
    static function deleteUser($idUSer)
    {
        $con=Database::getConnection();
        $req=$con->prepare('DELETE FROM users WHERE _idUser=?');
        $req->execute(array($idUSer));

    }

    static function getUserById($idUser)
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM users WHERE _idUser=?');
        $req->execute(array($idUser));
        return $req->fetch();

    }

    static function getIdPart($idUser)
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT idPart FROM users WHERE _idUser=? OR code=?');
        $req->execute(array($idUser,$idUser));
        return $req->fetch()['idPart'];
    }

    static function checkIfIsContractorUser($idUser)
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT namePart FROM partners WHERE _idPart=?');
        $req->execute(array($idUser));
        return $req->fetch()['namePart'];
    }
    static function getAllUsers()
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM users');
        $req->execute(array());
        return $req->fetchAll();
    }
    static function getUserForOnePartner($idPat)
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM users WHERE idPart=?');
        $req->execute(array($idPat));
        return $req->fetchAll();
    }
}