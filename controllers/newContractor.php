<?php
if(!isset($_SESSION))
{
    session_start();
}


if(isset($_POST['name'],$_POST['area'],$_POST['address'],$_POST['phone'])
&& !empty($_POST['name']) && !empty($_POST['area']) && !empty($_POST['address']) && !empty($_POST['phone']))
{
    include_once '../modals/Partner.php';
    include_once '../modals/Fpartner.php';
    include_once '../modals/Admin.php';
    include_once '../modals/Fadmin.php';

    $partner=new Partner(null,$_POST['name'],$_POST['area'],$_POST['address'],$_POST['phone'],null);
    $res=Fpartner::addNewPartner($partner);
    $username=substr($_POST['name'],0,3).''.rand(99,999);
    $password='12345';
    $idPart=$res;
    $admin=new Admin(null,$username,'contractor',$password,$idPart);
    if(is_numeric($res))
    {
        $res=Fadmin::addNewAdmin($admin);
        $_SESSION['done']="New Contractor add successfuly";
        header('Location: ../addNewPartner.php');
    }else
    {
        $_SESSION['err']="Imppossible to add this contractor";
        header('Location: ../addNewPartner.php');
    }
}else
{
    $_SESSION['err']="Compled all case";
    header('Location: ../addNewPartner.php');
}