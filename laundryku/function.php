<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'laundrydb';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
<?php
$con = mysqli_connect('localhost','root', '', 'laundrydb');

function login() { 
    global $con;

    $usn = htmlspecialchars($_POST["usnpelanggan"]);
    $password = htmlspecialchars($_POST["password"]);

    $req1 = mysqli_query($conn, "SELECT * FROM tbl_user WHERE usnpelanggan='{$usn}' AND password='{$password}'");

    if (mysqli_num_rows($req1) != 0){
        return 1;
    }
}

?>