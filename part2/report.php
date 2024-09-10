<?php
session_start();

if(!($_SESSION['user'])){
    echo "<script>alert('Log In')
        window.location.href='../login.php'
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="repo.css">
    <title>Document</title>
</head>
<body>
    <div class="othe">
    <?php
    include('nav.php');
    ?>
    <div class="or">
        <h1>Available Appointments</h1>
<div class="boxes">
    <div class="box">
        <h4>Sinusitis</h4>
        <p class="p">3</p>
        <p>Available Appointments</p>
    </div>
    <div class="box">
        <h4>Asthma</h4>
        <p class="p">6</p>
        <p>Available Appointments</p>
    </div>
    <div class="box">
        <h4>Eyes</h4>
        <p class="p">13</p>
        <p>Available Appointments</p>
    </div>
    <div class="box">
        <h4>Teeth</h4>
        <p class="p">8</p>
        <p>Available Appointments</p>
    </div>
    </div>
</div>
</div>
</body>
</html>