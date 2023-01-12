<?php
// Pertemuan 2
// Sintaks PHP

// Standar Output
// echo, print
#echo: 0, print:1
// print_r
// var_dump

//echo
//concat
//echo "Dilah <br>";
//echo " dilah" , " khaizure <br>";
//echo "ini" . "teks" . "yang" . "dibuat" . "terpisah <br>";

//print
//print "Dilah";

//print_r
//$nama_siswa = array("Amel", "Asiah", "Beby", "Firasya");
//print_r($nama_siswa);

//var_dump
//var_dump("Dilah Khaizure")

// Penulian sintaks php
// 1. PHP didalam html
// 2. Html didalam php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
<!-- PHP DALAM HTML -->    
   <h1>Halo, Welcome <?php echo "Dilah"; ?> </h1>
   <p><?php echo "ini namanya paragraf" ?></p>

<!-- TAG HTML DALAM PHP -->
   <?php
   echo "<h1>Welcome to my heart Haechan</h1>"
   ?>

</body>
</html>