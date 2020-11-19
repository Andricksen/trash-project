<?php
include_once '../modals/Fhistoric.php';
include_once '../modals/Historic.php';


if(isset($_GET['idUser'],$_GET['idTrash']) && !empty($_GET['idUser']) && !empty($_GET['idTrash']))
{
    Fhistoric::updateDateEmptyAndUser($_GET['idTrash'],$_GET['idUser']);
    echo  true;
}else
{
    echo  var_dump($_GET);
}

