<?php

if(!isset($_SESSION))
{
    session_start();
}


if(isset($_POST['username'],$_SESSION['password'],$_POST['role'],$_POST['idPart'])
    && !empty($_POST['username'])&& !empty($_POST['password']))
{
    include_once '../modals/Admin.php';
    include_once '../modals/Fadmin.php';

    $admin=new Admin(null,$_POST['username'],$_POST['role'],$_POST['password'],$_POST['idPart']);

    $res=Fadmin::addNewAdmin($admin);
    if(is_numeric($res))
    {
        $_SESSION['done']="new Admin add successfully";
        header('Location: ../addNewAdmin.php');
    }else
    {
        $_SESSION['err']="somthing ?";
        header('Location: ../addNewAdmin.php');
    }

}else
{
    $_SESSION['err']="somthing wrong";
    header('Location: ../addNewAdmin.php');
}