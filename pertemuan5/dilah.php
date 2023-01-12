<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nilai = 100;
    echo "Jumlah Cinta = " . $nilai . "<br>";
    if ($nilai == 100){
        echo " Cowok = Haechan";
    } elseif ($nilai >=90) {
        echo " Cowok = Abel K.";
    } elseif ($nilai >=80) {
        echo " Cowok = Hilmy R F";
    } elseif ($nilai >=70) {
        echo " Cowok = Eshan Birama";
    } else {
        echo " Cowok Rl";
    }
    echo "<br>";
    echo "<br>";
    $nilai = 90;
    echo "Jumlah Cinta = " . $nilai . "<br>";
    if ($nilai == 100){
        echo " Cowok = Haechan";
    } elseif ($nilai >=90) {
        echo " Cowok = Abel K.";
    } elseif ($nilai >=80) {
        echo " Cowok = Hilmy R F";
    } elseif ($nilai >=70) {
        echo " Cowok = Eshan Birama";
    } else {
        echo " Cowok Rl";
    }
    echo "<br>";
    echo "<br>";
    $nilai = 80;
    echo "Jumlah Cinta = " . $nilai . "<br>";
    if ($nilai == 100){
        echo " Cowok = Haechan";
    } elseif ($nilai >=90) {
        echo " Cowok = Abel K.";
    } elseif ($nilai >=80) {
        echo " Cowok = Hilmy R F";
    } elseif ($nilai >=70) {
        echo " Cowok = Eshan Birama";
    } else {
        echo " Cowok Rl";
    }
    echo "<br>";
    echo "<br>";
    $nilai = 70;
    echo "Jumlah Cinta = " . $nilai . "<br>";
    if ($nilai == 100){
        echo " Cowok = Haechan";
    } elseif ($nilai >=90) {
        echo " Cowok = Abel K.";
    } elseif ($nilai >=80) {
        echo " Cowok = Hilmy R F";
    } elseif ($nilai >=70) {
        echo " Cowok = Eshan Birama";
    } else {
        echo " Cowok Rl";
    }
    echo "<br>";
    echo "<br>";
    $nilai = 50;
    echo "Jumlah Cinta = " . $nilai . "<br>";
    if ($nilai == 100){
        echo " Cowok = Haechan";
    } elseif ($nilai >=90) {
        echo " Cowok = Abel K.";
    } elseif ($nilai >=80) {
        echo " Cowok = Hilmy R F";
    } elseif ($nilai >=70) {
        echo " Cowok = Eshan Birama";
    } else {
        echo " Cowok Rl";
    }

    echo "<br>";
    echo "<br>";

    echo "<br>";
    echo "<hr";
    abstract class Calc { 
        abstract public function calculate($param); 
        protected function getConst() { return 4; }
      } 
      class FixedCalc extends Calc {
        public function calculate($param) {
          return $this->getConst() + $param;
        }
      }
      $obj = new FixedCalc();
      echo $obj->calculate(38);
    ?>
    
</body>
</html>