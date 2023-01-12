<?php

// session_start();
// header('location:login.php');
require 'function.php';

// $con = mysqli_connect('localhost','root', '',);

// mysqli_select_db($con, 'laundrydb');

$name = $_POST['name'];
$usn = $_POST['user'];
$adrs = $_POST['address'];
$phone = $_POST['nohp'];
$pass = $_POST['password'];

$si = " SELECT * FROM  tbl_user WHERE nama_pengguna = '$name' ";
$result = mysqli_query($con, $si);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<script>
          alert ('Username already taken')
          </script>";
} else{
    $reg= "INSERT  INTO tbl_user(nama_pengguna, usnpelanggan, address, hp, password) values ('$name', '$usn', '$adrs', '$phone','$pass')";
    mysqli_query($con, $reg);
    echo "<script>
                alert ('sign up successful!');
                document.location.href = 'dashboard.php';
                </script>";
}

?>