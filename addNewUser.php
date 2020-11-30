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

<div class="main">
    <form action="controllers/newUser.php" method="post">
        <div class="imgcontainer">
            <h2>Add new User</h2>
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
            <label for="username"><b>FirstName</b></label>
            <input type="text" placeholder="Enter FirstName" name="firstname" required>

            <label for="psw"><b>LastName</b></label>
            <input type="text" placeholder="Enter LastName" name="lastname" required>

            <label for="psw"><b>Area</b></label>
            <input type="text" placeholder="Enter Area" name="area" required>

            <label for="psw"><b>Code User</b></label>
            <input type="text" placeholder="Enter Code User" name="code" required>

            <label for="psw"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" name="phone" required>


            <?php
                include_once 'modals/Fpartner.php';

                $contractors=Fpartner::getAllPartner();

            ;?>
            <?php if($_SESSION['role']=='admin'):?>
            <select  class="custom-select" name="idPart">
                <option value="">Contractor</option>
                <?php foreach($contractors as $contractor):?>
                      <option value="<?=$contractor['_idPart'];?>"><?=$contractor['namePart'];?></option>
                <?php endforeach;?>
            </select>
            <?php else:?>
                <input type="hidden" value="<?=$_SESSION['idPart'];?>" name="idPart">
            <?php endif;?>

            <button type="submit">Save User</button>

        </div>


    </form>
</div>
</body>
</html>
