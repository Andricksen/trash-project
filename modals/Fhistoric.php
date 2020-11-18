<?php
include_once 'Historic.php';
include_once 'Database.php';

class Fhistoric
{

    static function addNewHistoric(Historic  $historic)
    {
        $con=Database::getConnection();
        $req=$con->prepare('INSERT INTO historic SET idTrash=?,level=?,weight=?,dateFull=?,idUser=?,dateEmpty=?');
        $req->execute(array(
            $historic->getIdTrash(),
            $historic->getLevel(),
            $historic->getWeigth(),
            $historic->getDateFull(),
            $historic->getIdUser(),
            $historic->getDateEmpty()
        ));

        return $con->lastInsertId();
    }

    static function updateHistoric(Historic $historic)
    {
        $con=Database::getConnection();
        $req=$con->prepare('UPDATE historic SET idTrash=?,level=?,weight=?,dateFull=?,idUser=?,dateEmpty=? WHERE _idHisto=?');
        $req->execute(array(
            $historic->getIdTrash(),
            $historic->getLevel(),
            $historic->getWeigth(),
            $historic->getDateFull(),
            $historic->getIdUser(),
            $historic->getDateEmpty(),
            $historic->getId()
        ));
    }

    static function updateHistoricByDate(Historic $historic)
    {
        $con=Database::getConnection();
        $req=$con->prepare('UPDATE historic SET level=?,weight=?,dateFull=?,idUser=?,dateEmpty=? WHERE idTrash=? AND DATE(dateFull)=?');
        $req->execute(array(
            $historic->getIdTrash(),
            $historic->getLevel(),
            $historic->getWeigth(),
            $historic->getDateFull(),
            $historic->getIdUser(),
            $historic->getDateEmpty(),
            $historic->getId(),
            date('Y-m-d')
        ));
    }

    static function getOneHistoricOfTrash($idTrash)
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM historic WHERE idTrash=?');
        $req->execute(array($idTrash));
        return $req->fetch();
    }

    static function getAllHistoric()
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM historic c,trash t,users u WHERE c.idTrash=t.idTrash AND u.code=c.idUser ORDER BY c.dateFull DESC');
        $req->execute(array());
        return $req->fetchAll();
    }
    static function checkIfHistoricTrashIsSave($idTras)
    {
        $con=Database::getConnection();

        $req=$con->prepare('SELECT * FROM historic WHERE idTrash=? AND DATE(dateFull)=?');
        $req->execute($idTras,date('Y-m-d'));
        if($req->rowCount()>0)
        {
            return true;
        }
        return false;
    }

}