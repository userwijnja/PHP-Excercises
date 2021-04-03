<?php

$topo = array("Japan" => "Tokyo", "Mexico" => "Mexico City",  
                  "USA" => "Washington D.C", "India" => "New Delhi"
                , "Zuid-Korea" => "Seoul", "China" => "Peking", "Nigeria" => 
                "Abuja", "Argentina" => "Buonos Aires", 
                "Egypt" => "Cairo", "UK" => "London"); 
$result = 0;
foreach ($topo as $country => $city) {
    echo "Wat is de hoofdstad van " . $country . "?" . PHP_EOL;
    $input = readline('');

    if ($input != ($city)) {
         echo "Helaas, de hoofdstad van " . $country . " is " . $city . PHP_EOL;
    } else {
         $result += 1;
         echo "Correct!" . PHP_EOL;
    } 
}      
echo "je hebt " . $result . " van de 10 goed geraden!";


?>