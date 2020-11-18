<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_POST['long'],$_POST['lat'],$_POST['address'],$_POST['codeTras'])
    && !empty($_POST['long'])&& !empty($_POST['lat'])&& !empty($_POST['address'])&& !empty($_POST['codeTras']))
{

}else
{
    $_SESSION['err']="Veuiller remplir tous les champs";
    header('Location: ../');
}