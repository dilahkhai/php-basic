<?php
session_start();
require 'function.php';
// $con = mysqli_connect('localhost','root', '', 'laundrydb');

// mysqli_select_db($con, 'laundrydb');
// error_reporting(0);
$si = "SELECT * FROM  tbl_user";
// global $con;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laxtaundry</title>
    <link rel="stylesheet" href="dashboard.css">
    </head>
<body>
    <div class="box">
    <section class="profile_account">
        
<div>
    <h1 style="padding-top: 40px; margin-left:60px; font-size: 30px;">Profile</h1>
    <!-- <ul>
        <li>Fullname : <? echo $_POST["nama_pengguna"]?></li>
        <li>Username : <? echo $_POST["usnpelanggan"] ?></li>
        <li>Address : <? echo $_POST["address"] ?></li>
        <li>Phone : <? echo $_POST["hp"] ?> </li>
    </ul> -->

    <ul style="list-style: none; margin-top: 20px; margin-left:20px; font-size:20px; font-weight:bold; " id="user-profile">
        <li>Fullname: <?php echo $_SESSION['nama'] ?></li>
        <li>Username: <?php echo $_SESSION['username'] ?></li>
        <li>Number: <?php echo $_SESSION['phone'] ?></li>
        <li>Address: <?php echo $_SESSION['address'] ?></li>
    </ul>
    <a href="sign-out.php" id="">Sign Out</a> <!-- opsional -->
    
</div>
</section>
    </div>
</body>
</html>