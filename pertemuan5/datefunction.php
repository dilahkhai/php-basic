<?php
// built-in function
// function date
// l -> day name
// d -> date
// M -> Month
// m -> month

echo date("d");
echo date("l");
echo date("m");
echo date("M");
echo "<br>";
echo date("l, d M Y");
echo "<br>";

// function time
echo time(); // unixtimestamp dari 1 januari 1970// epoch time
echo "<br>";
echo date("l", time());

echo "<br>";
echo date ("l", time()-60*60*24*2); 
// 60 -> detik
// 60 -> jam
// 24 -> jam dalma sehari
// 2 -> hari yang mau ditebak

echo "<br>";
echo date ("d M Y", time()-60*60*24*2); 

// MKTIME
// jam, menit, detik, bulan, tanggal, tahun
echo "<br>";
echo mktime(0,0,0,0,0,0);
echo "<br>";
echo date("l", mktime(0,0,0,8,24,2006));
echo "<br>";

// strtotime
echo strtotime("24 Agustus 2006");
echo "<br>";
echo date("l", strtotime("24 Agustus 2006"));


?>