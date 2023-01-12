<?php

session_start();

$con = mysqli_connect('localhost','root', '',);

mysqli_select_db($con, 'laundrydb');

$name = $_POST['nama_pengguna'];
$usn = $_POST['usnpelanggan'];
$pass = $_POST['password'];

$si = "SELECT * FROM tbl_user WHERE usnpelanggan='{$usn}' AND password='{$pass}'";
$result = mysqli_query($con, $si);
$num = mysqli_num_rows($result);

$query = mysqli_query($con, "SELECT * FROM tbl_user WHERE usnpelanggan='{$usn}' AND password='{$pass}'");

if($num == 0){
    echo "<script>
        alert ('login successful!');
        document.location.href = 'add.php';
        </script>";
    } else
    echo "<script>
    alert ('login fail!');
    </script>";

?>