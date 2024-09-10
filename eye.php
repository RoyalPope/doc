<?php
include('conn.php');

$names = $_POST['names'];
$date = $_POST['date'];
$insurance = $_POST['insu'];
$id = $_POST['id'];


$insert="INSERT into eyes values('','$names','$insurance','$id','$date')";
$exec = mysqli_query($conn,$insert);

if($exec){
    echo "<script>alert('Appointment Booked For Eyes')
            window.location.href='index.php#help'
        </script>";
}else{
    echo "<script>alert('Erro')
            window.location.href='index.php'
        </script>";
}


?>