<?php
include('conn.php');

$username = $_POST['username'];
$pass = $_POST['pass'];
$type = $_POST['type'];


$insert="INSERT into users values('','$username','$pass','$type')";
$exec = mysqli_query($conn,$insert);

if($exec){
    echo "<script>alert('Account created')
            window.location.href='login.php#help'
        </script>";
}else{
    echo "<script>alert('Erro')
            window.location.href='login.php'
        </script>";
}


?>