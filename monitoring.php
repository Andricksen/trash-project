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
<?php


    include_once 'modals/Fhistoric.php';
    $historic=Fhistoric::getAllHistoricDay();
;?>
<div class="main">
    <h2>Monitoring Trash</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>#</th>
                <th>ID Trash</th>
                <th>Level</th>
                <th>Weigth</th>
                <th>Address</th>
                <th>Status</th>
                <th>Last update</th>
            </tr>
            </thead>
            <tbody id="moni">
            <?php foreach ($historic as $k => $data):?>

            <?php endforeach;?>
            <tbody>
        </table>
    </div>
</div>
</body>

<script>

    setInterval(function(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log((this.responseText));

                var div=document.getElementById('moni');
                div.innerHTML=(this.responseText)
            }

        };
        xmlhttp.open('GET', 'http://127.0.0.1/trash-project/controllers/getMonitoring.php');
        xmlhttp.send();
    }, 2000);//run this thang every 2 seconds




</script>
</html>
