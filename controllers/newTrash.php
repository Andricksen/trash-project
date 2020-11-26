<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_POST['long'],$_POST['lat'],$_POST['address'],$_POST['codeTras'])
    && !empty($_POST['long'])&& !empty($_POST['lat'])&& !empty($_POST['address'])&& !empty($_POST['codeTras']))
{
    include_once '../modals/Trash.php';
    include_once '../modals/Ftrash.php';

    $trash=new Trash(null,$_POST['long'],$_POST['lat'],$_POST['address'],$_POST['codeTras'],$_POST['type'],null);

    $res=Ftrash::addTrash($trash);
    if(is_numeric($res))
    {
        $_SESSION['done']="Trash add successfuly";
        header('Location: ../addNewTrash.php');
    }else
    {
        $_SESSION['err']="Impossible to add this trash";
        header('Location: ../addNewTrash.php');
    }

}else
{
    $_SESSION['err']="blank case refused";
    header('Location: ../addNewTrash.php');
}