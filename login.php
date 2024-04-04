<?php
session_start();
include("conn.php");

$user = $_POST['username'];
$pass = $_POST['pass'];

$select = "SELECT * from users";
$sql = mysqli_query($conn,$select);

while($row = mysqli_fetch_assoc($sql)){
    if($user == $row['Username'] && $pass == $row['Password']){
        // $_SESSION['user'] = $user;
        echo "<script>alert('Welcome back')</script>";
        header("Location: home.php");
        exit(); 
    }
}

?>