<?php
include('conn.php');

$names = $_POST['names'];
$date = $_POST['date'];
$insurance = $_POST['insu'];
$id = $_POST['id'];


$insert="INSERT into asthma values('','$names','$insurance','$id','$date')";
$exec = mysqli_query($conn,$insert);

if($exec){
    echo "<script>alert('Appointment Booked For Asthma')
            window.location.href='home.php#help'
        </script>";
}else{
    echo "<script>alert('Erro')
            window.location.href='home.php'
        </script>";
}


?>