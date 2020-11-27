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

    $partner=new Partner($_POST['idPart'],$_POST['name'],$_POST['area'],$_POST['address'],$_POST['phone'],null);
    Fpartner::updatePartner($partner);
    $_SESSION['done']=" Contractor Update successfuly";
    header('Location: ../alterContractor.php');
}else
{
    $_SESSION['err']="Complete all case";
    header('Location: ../alterContractor.php');
}