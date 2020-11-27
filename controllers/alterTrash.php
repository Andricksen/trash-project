<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_POST['long'],$_POST['lat'],$_POST['address'],$_POST['codeTras'])
    && !empty($_POST['long'])&& !empty($_POST['lat'])&& !empty($_POST['address'])&& !empty($_POST['codeTras']))
{
    include_once '../modals/Trash.php';
    include_once '../modals/Fhistoric.php';
    include_once '../modals/Ftrash.php';

    $trash=new Trash($_POST['idTrash'],$_POST['long'],$_POST['lat'],$_POST['address'],$_POST['codeTras'],$_POST['type'],null);

    Ftrash::updateTrash($trash);

    $_SESSION['done']="Trash update successfuly";
    header('Location: ../alterTrash.php');
}else
{
    $_SESSION['err']="blank case refused";
    header('Location: ../alterTrash.php');
}