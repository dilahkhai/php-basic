<?php
########################################
# Pertemuan 5
#Pengulangan
########################################

// for
for ($i=0; $i<=5; $i++){
    echo "Baris ke-$i <br>";
}

//while
$x = 1;
while($x <= 5) {
    echo "The number is : $x <br>";$x++;
}

echo "<br>";
// Example 2 - while
$x = 0;
while($x <= 100) {
    echo "The number is : $x <br>";$x+=10;
}
echo "<br>";

//do...while
/* Notes
jalankan dulu baru check kondisi, ketika kond */
$x = 10;
do{
    echo "The number is: $x <br>"; $x++;
} while ($x <= 5);

echo "<br>";
//foreach
//example 1
$colors = array("red" , "green" , "blue" , "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

echo "<br>";

// example 2
/*perbedaan dengan format sebelumnya ada di variabel perantara kedua,
 yakni variabel $key. variabel $key akan menampung nilai key array. 
 Berikut contoh penggunannya */
$age = array(
    "Peter"=>"35",
    "Ben"=>"37",
    "Joe"=>"35");

    foreach($age as $x => $val){
        echo "$x = $val <br>";
    }

    $x = 0;
while($x<=7) {
   $x++;
}
echo $x;

echo "<br>";

$x = 6;
if ($x ==  10) {
      echo "A";
}
elseif ($x > 7 && $x < 10) {
       echo "B";
}
elseif ($x == 20) {
       echo "C";
}
else {
       echo "D";
}
echo "<br>";
echo "<br>";

session_start();
$_SESSION['name'] = $name;
echo $_SESSION['name'];
$name = "Alex";


?>