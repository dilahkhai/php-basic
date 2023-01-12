<?php

#Pre - deccrement
echo "<h3>Predecrement";
$a = 0;
$i = 1;
$a = --$i;

echo "<br>";
#post_decrement
echo "<h3>Posdecrement</h3";
$a = 0;
$i = 1;
$a = $i--;
echo "a = " . $a . "<br>";
echo "i = " . $i;

?>