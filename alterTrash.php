<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DashBoard</title>
    <meta name="description" content="My Page Description">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/input.css">
</head>
<body>
<?php include_once 'commons/menu.php';?>
<?php

include_once 'modals/Ftrash.php';

$trash=Ftrash::getTrashById($_GET['idTrash']);
?>
<div class="main">
    <form action="controllers/alterTrash.php" method="post">
        <div class="imgcontainer">
            <h2>Update Trash</h2>
        </div>
        <center>
            <?php if(isset($_SESSION['err'])):?>
                <?=$_SESSION['err'];?>
                <?php unset($_SESSION['err']); endif;?>
            <?php if(isset($_SESSION['done'])):?>
                <?=$_SESSION['done'];?>
                <?php unset($_SESSION['done']); endif;?>
        </center>
        <div class="container">
            <label for="username"><b>Logitude</b></label>
            <input value="<?=$trash['longi'];?>" type="text" placeholder="Enter Logitude" name="long" required>
            <input type="hidden" name="idTrash" value="<?=$_GET['idTrash'];?>">
            <label for="psw"><b>Latitude</b></label>
            <input value="<?=$trash['lat'];?>" type="text" placeholder="Enter Latitude" name="lat" required>

            <label for="psw"><b>Address</b></label>
            <input value="<?=$trash['address'];?>" type="text" placeholder="Enter Address" name="address" required>

            <label for="psw"><b>Code Trash</b></label>
            <input value="<?=$trash['codeTrash'];?>" type="text" placeholder="Enter Code Trash" name="codeTras" required>

            <select  class="custom-select" name="type" required>
                <option value="paper">Paper</option>
                <option value="plastic">Plastic</option>
                <option value="glass">Glass</option>
            </select>

            <button type="submit">Update Trash</button>

        </div>


    </form>
</div>
</body>
</html>
