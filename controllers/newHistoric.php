<?php
include_once '../modals/Fhistoric.php';
include_once '../modals/Historic.php';
if(isset($_GET['idTrash'],$_GET['level'],$_GET['weight']) && !empty($_GET['idTrash'])&& !empty($_GET['level'])&& !empty($_GET['weight']))
{
    $historic=new Historic(null,$_GET['idTrash'],$_GET['level'],$_GET['weight'],null,null,null);

    $hist=Fhistoric::getOneHistoricOfTrash($_GET['idTrash']);
    $historic->setDateFull(date('Y-m-d H:m:s'));
    if(Fhistoric::checkIfHistoricTrashIsSave($_GET['idTrash']) && $hist['dateEmpty']==null)
    {
        if($_GET['level']>90)
        {
            $historic->setDateFull(date('Y-m-d H:m:s'));
            Fhistoric::updateHistoricByDate($historic);
        }else{
            Fhistoric::updateHistoricByDate($historic);
        }

    }else
    {
        var_dump(Fhistoric::addNewHistoric($historic));
    }
}else
{
    echo var_dump($_GET);
}
