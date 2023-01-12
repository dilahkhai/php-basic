<?php

echo "Menghitung Volume Bola \n";
echo "-----------------------\n";

//menggunakan const
const P1 = 3.14;
echo "Masukkan jari-jari bola";
$r = fgets(STDIN);
$volume = PI * $r *$r *$r;
echo "rumus Volume bola adalah V = 3.14 * r * r * r \n";
echo "Volume adalah " . $volume . "\n";

// menggunakan fungsi define()
// parameter 1 menyatakan nama konstanta
// parameter 2 menyatakan nilai konstanta
echo "Menghitung Luas Permukaan Bola \n";
echo "------------------------------\n";

define('phi', 3.14);
echo "Masukkan jari-jari bola : ";
$r1 = fgets(STDIN);
$luas_permukaan_bola = 4* PI * $r1 * $r1;
echo "rumus luas permukaan bola adalah Lp = 4 * PI * r * r \n";
echo "Luas Permukaan Bola Adalah " . $luas_permukaan_bola . "\n";
