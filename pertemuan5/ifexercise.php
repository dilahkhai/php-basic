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
    $nilai = 10;
    echo "Nilai Anda = " . $nilai . "<br>";
    if ($nilai >90){
        echo " Grade = A+";
    } elseif ($nilai >80) {
        echo " Grade = A";
    } elseif ($nilai >70) {
        echo " Grade = B+";
    } elseif ($nilai >60) {
        echo " Grade = B";
    } elseif ($nilai >50) {
        echo " Grade = C+";
    } elseif ($nilai >40) {
        echo " Grade = C";
    } elseif ($nilai >30) {
        echo " Grade = D";
    } elseif ($nilai >20) {
        echo " Grade = E";
    } else {
        echo "Grade = F";
    }
    ?>
    <br>
    <?php
    function test($num) {
        echo $num/2;
    }
    test(14);

    echo "<br>";

    function func($arg)  {
        $result = 0;
        for($i=0; $i<$arg; $i++) {
          $result = $result + $i;
        }
        return $result;
      }
      echo func(5);
    ?>
    
</body>
</html>