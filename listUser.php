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
<?php include_once 'modals/Fuser.php';



$users=Fuser::getAllUsers();

;?>

<div class="main">
    <h2>User List</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Firstname</th>
                <th>LastName</th>
                <th>Code</th>

                <th>Phone</th>
                <th>Area</th>
                <th>Date created</th>
                <th>Partner</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $k => $user):?>
                <tr>
                    <td><?=$k+1;?></td>
                    <td><?=$user['firstname'];?></td>
                    <td><?=$user['lastname'];?></td>
                    <td><?=$user['code'];?></td>

                    <td><?=$user['phone'];?></td>
                    <td><?=$user['area'];?></td>
                    <td><?=$user['date_created'];?></td>
                    <td><?=$user['idPart']==null?'User':Fuser::checkIfIsContractorUser($user['idPart']);?></td>

                </tr>
            <?php endforeach;?>
            <tbody>
        </table>
    </div>
</div>
</body>
</html>
