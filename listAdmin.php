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
<?php include_once 'modals/Fadmin.php';



$users=Fadmin::getAllAdmin();

;?>

<div class="main">
    <h2>Admin List</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Role</th>
                <th>Date created</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $k => $user):?>
                <tr>
                    <td><?=$k+1;?></td>
                    <td><?=$user['username'];?></td>
                    <td><?=$user['role'];?></td>
                    <td><?=$user['date_created'];?></td>
                    <td><a href="alterAdmin.php?idAdmin=<?=$user['_idAdmin'];?>">Alter</a>||<a href="controllers/deleteAdmin.php?idAdmin=<?=$user['_idAdmin'];?>">Delete</a></td>

                </tr>
            <?php endforeach;?>
            <tbody>
        </table>
    </div>
</div>
</body>
</html>
