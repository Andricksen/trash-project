<?php

if(isset($_GET['idPart']) && !empty($_GET['idPart']))
{
    include_once '../modals/Fpartner.php';

    Fpartner::deletePartner($_GET['idPart']);
    header('Location: ../listPartner.php');

}else{
    header('Location: ../listPartner.php');
}