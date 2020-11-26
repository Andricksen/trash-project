<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DashBoard</title>
    <meta name="description" content="My Page Description">
    <link rel="stylesheet" href="style/menu.css">


</head>
<body>
<?php include_once 'commons/menu.php';?>
<?php include_once 'modals/Fhistoric.php';


$historic=Fhistoric::getAllHistoricCollectionDay();

;?>

<div class="main">
    <h2>Collection Trash</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>#</th>
                <th>ID Trash</th>
                <th>Level</th>
                <th>Weigth</th>
                <th>Address</th>
                <th>Date Full</th>
                <th>DateEmpty</th>
                <th>User</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($historic as $k => $data):?>
                <tr>
                    <td><?=$k+1;?></td>
                    <td><?=$data['codeTrash'];?></td>
                    <td><?=$data['level'];?></td>
                    <td><?=$data['weight'];?></td>
                    <td><?=$data['address'];?></td>
                    <td><?=$data['dateFull'];?></td>
                    <td><?=$data['dateEmpty'];?></td>
                    <td><?=$data['firstname'].' '.$data['lastname'];?></td>


                </tr>
            <?php endforeach;?>
            <tbody>
        </table>
    </div>
</div>
</body>
</html>
