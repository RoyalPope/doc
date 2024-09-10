<?php
session_start();
$_SESSION=array();
session_destroy();
echo "<script>alert('Logged Out')
        window.location.href='login.php'
    </script>";
?>