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
<?php include_once 'modals/Ftrash.php';



$trahs=Ftrash::getAllTrash();
?>

<div class="main">
    <h2>Trash List</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>#</th>
                <th>ID Trash</th>
                <th>long</th>
                <th>lat</th>
                <th>Address</th>
                <th>Type</th>
                <th>Date add</th>

            </tr>
            </thead>
            <tbody>

         <?php foreach($trahs as $k => $trah):?>
            <tr>
                <td><?=$k+1;?></td>
                <td><?=$trah['codeTrash'];?></td>
                <td><?=$trah['longi'];?></td>
                <td><?=$trah['lat'];?></td>
                <td><?=$trah['address'];?></td>
                <td><?=$trah['typeTrash'];?></td>
                <td><?=$trah['dateTrash'];?></td>

            </tr>
        <?php endforeach;?>
            <tbody>
        </table>
    </div>
</div>
</body>
</html>
