<?php
include('conn.php');

$names = $_POST['names'];
$date = $_POST['date'];
$insurance = $_POST['insu'];
$id = $_POST['id'];


$insert="INSERT into teeth values('','$names','$insurance','$id','$date')";
$exec = mysqli_query($conn,$insert);

if($exec){
    echo "<script>alert('Appointment Booked For Teeth')
            window.location.href='index.php#help'
        </script>";
}else{
    echo "<script>alert('Erro')
            window.location.href='index.php'
        </script>";
}


?>