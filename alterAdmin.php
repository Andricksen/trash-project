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
include_once 'modals/Fadmin.php';


$admin=Fadmin::getInfoAdminById($_GET['idAdmin']);
?>
<div class="main">
    <form action="controllers/alterAdmin.php" method="post">
        <div class="imgcontainer">
            <h2>Update Admin</h2>
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
            <input type="hidden" name="idAdmin" value="<?=$_GET['idAdmin'];?>">
            <label for="username"><b>Username</b></label>
            <input value="<?=$admin['username'];?>" type="text" placeholder="Enter Username" name="username" required>
            <select  class="custom-select" name="role" >
                <option value="">Role</option>
                <option value="admin">Admin</option>
                <option value="contractor">Contractor</option>

            </select>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>



            <br>
            <label for="psw"></label>
            <?php
            include_once 'modals/Fpartner.php';

            $contractors=Fpartner::getAllPartner();

            ;?>
            <select  class="custom-select" name="idPart" >
                <option value="">Contractor</option>
                <?php foreach($contractors as $contractor):?>
                    <option value="<?=$contractor['_idPart'];?>"><?=$contractor['namePart'];?></option>
                <?php endforeach;?>
            </select>

            <button type="submit">Update Admin</button>

        </div>


    </form>
</div>
</body>
</html>
