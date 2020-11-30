<?php

if(!isset($_SESSION))
{
    session_start();
}
;?>
<div class="sidenav">
    <a href="monitoring.php">Monitoring</a>
    <a href="maps.php">Maps</a>
    <a href="alert.php">Alert</a>
    <a href="collection.php">Collection</a>
    <a href="rapport.php">Raport</a>
    <a href="listUser.php">List Users</a>
    <a href="addNewUser.php">Add new User</a>
    <?php if($_SESSION['role']=='admin'):?>

        <a href="addNewTrash.php">Add new Trash</a>
        <a href="addNewAdmin.php">Add new Admin</a>

        <a href="addNewPartner.php">Add new Contractor</a>
        <a href="listTrash.php">List Trash</a>

        <a href="listPartner.php">List Contractor</a>
        <a href="listAdmin.php">List Admin</a>

    <?php endif;?>
    <a href="controllers/exit.php">Logout</a>
</div>
<?php
