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
include_once 'modals/Fpartner.php';

$partner=Fpartner::getOnePartnerById($_GET['idPart']);
?>
<div class="main">
    <form action="controllers/alterContractor.php" method="post">
        <div class="imgcontainer">
            <h2>Update Contractor</h2>
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
            <label for="username"><b>Name Contractor</b></label>
            <input value="<?=$partner['namePart'];?>" type="text" placeholder="Enter Name Contractor" name="name" required>
            <input type="hidden" name="idPart" value="<?=$_GET['idPart'];?>">
            <label for="psw"><b>Area</b></label>
            <input value="<?=$partner['area'];?>" type="text" placeholder="Enter Area" name="area" required>

            <label for="psw"><b>Address</b></label>
            <input value="<?=$partner['address'];?>" type="text" placeholder="Enter Address" name="address" required>

            <label for="psw"><b>Phone</b></label>
            <input value="<?=$partner['phone'];?>" type="text" placeholder="Enter Phone" name="phone" required>



            <button type="submit">Update Contractor</button>

        </div>


    </form>
</div>
</body>
</html>
