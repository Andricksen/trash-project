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

    $idPar=$_SESSION['role']=='admin'?null:$_SESSION['idPart'];
    $user=new User(null,$_POST['firstname'],$_POST['lastname'],$_POST['code'],$_POST['phone'],$_POST['area'],$idPar,null);

    if(Fuser::checkCodeUser($_POST['code']))
    {
        $res=Fuser::addNewUser($user);
        if(is_numeric($res))
        {
            $_SESSION['done']="New USer add successfuly";
            header('Location: ../addNewUser.php');
        }else{
            $_SESSION['err']="Impossible to add this user";
            header('Location: ../addNewUser.php');
        }
    }else
    {
        $_SESSION['err']="This code user is already used";
        header('Location: ../addNewUser.php');
    }



}else
{
    $_SESSION['err']="fill all case ";
    header('Location: ../addNewUser.php');
}