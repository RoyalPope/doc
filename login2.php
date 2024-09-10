<?php
session_start();
include("conn.php");

$user = $_POST['username'];
$pass = $_POST['pass'];

$select = "SELECT * from users";
$sql = mysqli_query($conn,$select);

while($row = mysqli_fetch_assoc($sql)){
    if($user == $row['username'] && $pass == $row['password']){
        $_SESSION['user'] = $user;
        echo "<script>alert('Welcome Back')
            window.location.href='part2/report.php'
        </script>";
        exit();
    }elseif($user == $row['username'] && $pass == $row['password']){
        $_SESSION['user'] = $user;
        echo "<script>alert('Welcome to HPOINT')
            window.location.href='part2/report.php'
        </script>";
    }
}
    echo "<script>alert('Invalid Credentials')
        window.location.href='login.php'
    </script>";
?>