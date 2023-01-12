<?php
$student = ["Dilah Khaizure", "00062524", "IT RPL", "dilahkhaizure@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Student</title>
</head>
<body>
    <?php foreach($student as $value)
    {
        echo "$value <br>";
    }
    ?>
</body>
</html>