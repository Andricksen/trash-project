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

    $trash=new Trash(null,$_POST['long'],$_POST['lat'],$_POST['address'],$_POST['codeTras'],$_POST['type'],null);

    if(Fhistoric::checkCodeTrash($_POST['codeTras']))
    {
        $res=Fhistoric::addTrash($trash);
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
        $_SESSION['err']="This code of trash is already used";
        header('Location: ../addNewTrash.php');
    }

}else
{
    $_SESSION['err']="blank case refused";
    header('Location: ../addNewTrash.php');
}