<?php

echo "Van welk cijfer wil je de faculteit berekenen?";

$n = readline(" ");
$x = 1;


while ($i < $n) {
    $x *= ($i + 1);
    $i++;
}


echo "De faculteit van $n = $x";
?>