<?php
require 'function.php';
$si = query("SELECT * FROM tbl_user");
?>
<!DOCTYPE HTML>
<html>
<head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<style>
 .error {color: #FF0000}
</style>
</head>
<body>


<?php
$name_pesan= $usn_pesan= $email_pesan= $password_pesan =" ";
$name = $usn= $email= $password= " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST["name"])) {
 $name_pesan = "Nama harus diisi";
 } else {
 $name = htmlspecialchars($_POST["name"]);
 } 
 if(empty($_POST["usn"])) {
 $usn_pesan = "Username harus diisi";
 } else {
 $usn = htmlspecialchars($_POST["usn"]);
 } 
 if (empty($_POST["email"])){
 $email_pesan = "Email harus diisi";
 } else {
 if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
 $email_pesan = "Email yang dimasukkan tidak valid";
 } else {
 $email = htmlspecialchars($_POST["email"]);
 }
 } 
 if(empty($_POST["password"])){
 $password_pesan = "Password harus diisi";
 } else{
 if(strlen($_POST["password"])<5){
 $password_pesan = "Password terlalu pendek";
 }else{
 $password = htmlspecialchars($_POST["password"]);
 }
 }
}
?>
<div class="container">
    <h1>Sign Up</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nama: <input type="text" name="name">
<span class="error">* <?php echo $name_pesan;?></span>
<br><br>
Username: <input type="text" name="usn">
<span class="error">* <?php echo $name_pesan;?></span>
<br><br>
Email: <input type="text" name="email">
<span class="error">* <?php echo $email_pesan;?></span>
<br><br>
Password: <input type="password" name="password">
<span class="error">* <?php echo $password_pesan;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>

<!-- <?php
echo "<h2>Yang kamu inputkan:</h2>";
echo "Nama : ".$name;
echo "<br>";
echo "Username : ".$usn;
echo "<br>";
echo "Email : ".$email;
echo "<br>";
echo "Password : ".$password;

?> -->
</html>
