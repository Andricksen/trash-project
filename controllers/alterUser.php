<?php
if(!isset($_SESSION))
{
    session_start();
}


if(isset($_POST['firstname'],$_POST['lastname'],$_POST['code'],$_POST['phone'],$_POST['area'],$_POST['idPart'])
&& !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['code'])&& !empty($_POST['phone']))
{
    include_once '../modals/User.php';
    include_once '../modals/Fuser.php';

    $user=new User($_POST['idUser'],$_POST['firstname'],$_POST['lastname'],$_POST['code'],$_POST['phone'],$_POST['area'],$_POST['idPart'],null);
    
    Fuser::updateUser($user);
    $_SESSION['done']="User update successfuly";
    header('Location: ../alterUser.php');

}else
{
    $_SESSION['err']="fill all case ";
    header('Location: ../alterUser.php');
}