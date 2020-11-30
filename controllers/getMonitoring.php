<?php
include_once '../modals/Fhistoric.php';
$historic=Fhistoric::getAllHistoricDay();

$tr='';

foreach ($historic as $k => $data){
    $j=($k+1);
    $codeTrash=$data['codeTrash'];
    $level=$data['level'];
    $weight=$data['weight'];
    $address=$data['address'];
    $dateFull=$data['dateFull']==null?'Not full':'Full';
    $hist=$data['dateHisto'];
    $tr.="<tr>
        <td>$j</td>
        <td>$codeTrash</td>
        <td>$level</td>
        <td>$weight</td>
        <td>$address</td>
        <td>$dateFull</td>
        <td>$hist</td>
    </tr>";
}

echo $tr;