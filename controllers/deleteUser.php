<?php

if(isset($_GET['idUSer']) && !empty($_GET['idUser']))
{
    include_once '../modals/Fuser.php';
    Fuser::deleteUser($_GET['idUser']);
    header('Location: ../listUser.php');

}else
{
    header('Location: ../listUser.php');
}