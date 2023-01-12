<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Example 1 -->
    <?php
    $favcolor = "blue";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default :
            echo "Your favorite color is neiter red, blue, nor green!";
    }
    ?>

    <br>

    <!-- Example 2 -->
    <?php
    $month = "2";

    switch ($month) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Bulan " . $month . " termasuk Semester 1";
            break;
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            echo "Bulan " . $month . " termasuk Semester 2";
            break;
        default :
         echo "Tidak ada bulan
         ";
    }
    ?>

</body>
</html>