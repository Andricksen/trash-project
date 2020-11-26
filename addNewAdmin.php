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
    <form action="controllers/newAdmin.php" method="post">
        <div class="imgcontainer">
            <h2>Add new Admin</h2>
        </div>

        <div class="container">

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter FirstName" name="firstname" required>
            <select  class="custom-select" name="idPart" required>
                <option value="">Role</option>
                <option value="admin">Admin</option>
                <option value="contractor">Contractor</option>

            </select>
            <label for="psw"><b>Password</b></label>
            <input type="text" placeholder="Enter LastName" name="lastname" required>



            <br>
            <label for="psw"></label>
            <?php
            include_once 'modals/Fpartner.php';

            $contractors=Fpartner::getAllPartner();

            ;?>
            <select  class="custom-select" name="idPart" required>
                <option value="">Contractor</option>
                <?php foreach($contractors as $contractor):?>
                    <option value="<?=$contractor['_idPart'];?>"><?=$contractor['namePart'];?></option>
                <?php endforeach;?>
            </select>

            <button type="submit">Save Admin</button>

        </div>


    </form>
</div>
</body>
</html>
