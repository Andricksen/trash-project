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
    <form action="controllers/newTrash.php" method="post">
        <div class="imgcontainer">
            <h2>Add new Trash</h2>
        </div>

        <div class="container">
            <label for="username"><b>Logitude</b></label>
            <input type="text" placeholder="Enter Logitude" name="long" required>

            <label for="psw"><b>Latitude</b></label>
            <input type="text" placeholder="Enter Latitude" name="lat" required>

            <label for="psw"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>

            <label for="psw"><b>Code Trash</b></label>
            <input type="text" placeholder="Enter Code Trash" name="codeTras" required>

            <select  class="custom-select" name="type" required>
                <option value="paper">Paper</option>
                <option value="plastic">Plastic</option>
                <option value="glass">Glass</option>
            </select>

            <button type="submit">Save Trash</button>

        </div>


    </form>
</div>
</body>
</html>
