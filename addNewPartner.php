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
    <form action="controllers/newContractor.php" method="post">
        <div class="imgcontainer">
            <h2>Add new Contractor</h2>
        </div>

        <div class="container">
            <label for="username"><b>Name Contractor</b></label>
            <input type="text" placeholder="Enter Name Contractor" name="name" required>

            <label for="psw"><b>Area</b></label>
            <input type="text" placeholder="Enter Area" name="area" required>

            <label for="psw"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>

            <label for="psw"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" name="Phone" required>



            <button type="submit">Save Contractor</button>

        </div>


    </form>
</div>
</body>
</html>
