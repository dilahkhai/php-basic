<?php
function salam($waktu = "pagi", $nama = "haechan"){
    return "Selamat ". $waktu . " " . $nama;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Function</title>
    </head>
    <body>
        <h1><?php echo salam("Pagi", "Renjun"); ?></h1>
    </body>
</html>