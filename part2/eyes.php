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
    <link rel="stylesheet" href="table1.css">
    <title>Document</title>
</head>
<body>
    <div class="all">
    <?php
    include('nav.php');
    ?>
    <div class="other">
        <h1>Eyes Appointment Report</h1>
    <div class="ser">
        <form action="" method="get">
        <label for="">Search</label>
        <input type="search" placeholder="Search by Id..." name="insur">
        <input type="submit" value="Search" name="submit">
        </form>
    </div>
    <div class="table">
    <table border=1>
        <tr>
            <th>No</th>
            <th>NAMES</th>
            <th>INSURANCE</th>
            <th>ID</th>
            <th>Date Booked</th>
        </tr>
            <?php
            include('../conn.php');
            if(isset($_GET['submit'])){
            $id = $_GET['insur'];
            $select = "SELECT * from eyes where Insurance_Id like '%$id%' or Names like '%$id%'";
            $qry = mysqli_query($conn,$select);

            while($row = mysqli_fetch_assoc($qry)){
                ?>
                    <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['Names']?></td>
                    <td><?= $row['Insurance']?></td>
                    <td><?= $row['Insurance_Id']?></td>
                    <td><?= $row['Date']?></td>
                    </tr>
                <?php
            }
        }else{
            $select = "SELECT * from eyes";
            $qry = mysqli_query($conn,$select);

            while($row = mysqli_fetch_assoc($qry)){
                ?>
                    <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['Names']?></td>
                    <td><?= $row['Insurance']?></td>
                    <td><?= $row['Insurance_Id']?></td>
                    <td><?= $row['Date']?></td>
                    </tr>
                <?php
            }
        }
            ?>
    </table>
    </div>
    </div>
    </div>
</body>
</html>