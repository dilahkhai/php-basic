<?php
echo "---------- Program Menghitung Luas Lingkaran----------\n\n"; // \n untuk pnggnti br

echo "Masukkan jari-jari";
$jari = fgets(STDIN); //untuk input data
$luas = 3.14 * $jari * $jari;

echo "Luas Lingkaran Adalah : " . $luas;

?>