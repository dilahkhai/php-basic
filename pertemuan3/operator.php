<?php
// Pertemuan 3 - latihan php
// operator

// operator aritmatika
//+ - * / %

// $a = 10;
// $b = 20;

// $total = $a  $b;
// echo $total;

// operator assignment
// $speed = 83 * 10; //operasi aritmatika
// $speed *= 10; //operasi penugasa allgniment
// echo $speed

//operator relation
$a = 6;
$b = 6;

// menggunakan operator lebih besar
$c = $a > $b;
echo "$a > $b = $c";
echo "<br>";

// menggunakan operator lebih kecil
$c = $a < $b;
echo "$a < $b = $c";
echo "<br>";

// menggunakan operator relasi sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<br>";

// menggunakan operator relasi tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<br>";

// menggunakan operator relasi > sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<br>";

// menggunakan operator relasi < sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<br>";

// operator logika
// &&, ||, !

//&&
$x = 10;
var_dump($x < 20 && $x %2 ==0);
var_dump($x > 20 || $x %2 ==0);
var_dump($x >=! 20)


?>