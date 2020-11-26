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
<?php include_once 'modals/Fpartner.php';



$contractors=Fpartner::getAllPartner();
?>

<div class="main">
    <h2>Contractor List</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>address</th>
                <th>Phone</th>
                <th>Area</th>
                <th>Date Add</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($contractors as $k => $data):?>
                <tr>
                    <td><?=$k+1;?></td>
                    <td><?=$data['namePart'];?></td>
                    <td><?=$data['address'];?></td>
                    <td><?=$data['phone'];?></td>
                    <td><?=$data['area'];?></td>
                    <td><?=$data['date_add'];?></td>

                </tr>
            <?php endforeach;?>
            <tbody>
        </table>
    </div>
</div>
</body>
</html>
