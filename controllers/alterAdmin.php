<?php

if(!isset($_SESSION))
{
    session_start();
}


if(isset($_POST['username'],$_POST['password'],$_POST['role'],$_POST['idPart'])
    && !empty($_POST['username'])&& !empty($_POST['password']))
{
    include_once '../modals/Admin.php';
    include_once '../modals/Fadmin.php';

    $admin=new Admin($_POST['idAdmin'],$_POST['username'],$_POST['role'],$_POST['password'],$_POST['idPart']);

    Fadmin::updateAdmin($admin);

    $_SESSION['done']="Admin update successfully";
    header('Location: ../alterAdmin.php');
}else
{
    $_SESSION['err']="somthing wrong";
    header('Location: ../alterAdmin.php');
}