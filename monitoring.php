<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DashBoard</title>
    <meta name="description" content="My Page Description">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/lis.css">


</head>
<body>
<?php include_once 'commons/menu.php';?>
<?php


    include_once 'modals/Fhistoric.php';
    $historic=Fhistoric::getAllHistoricDay();
;?>
<div class="main">
    <h2>Monitoring Trash</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>#</th>
                <th>ID Trash</th>
                <th>Level</th>
                <th>Weigth</th>
                <th>Address</th>
                <th>Status</th>
                <th>Last update</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($historic as $k => $data):?>
                <tr>
                    <td><?=$k+1;?></td>
                    <td><?=$data['codeTrash'];?></td>
                    <td><?=$data['level'];?></td>
                    <td><?=$data['weight'];?></td>
                    <td><?=$data['address'];?></td>
                    <td><?=$data['dateFull']==null?'Not full':'Full';?></td>
                    <td><?=$data['dateHisto'];?></td>

                </tr>
            <?php endforeach;?>
            <tbody>
        </table>
    </div>
</div>
</body>
</html>
