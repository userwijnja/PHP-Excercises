<?php

$aantalVrienden = readline("Hoeveel vrienden zal ik vragen om hun droom? ");
if (($aantalVrienden < 1) || (is_numeric($aantalVrienden) == false)) {
    exit("$aantalVrienden 'is geen geldig getal'");
}

$dromen = [];


foreach (range(1, $aantalVrienden) as $vriend) {
    $naam = readline('wat is je naam? ');
    $droom = readline('Wat is jouw droom? ');
    $dromen[$naam][] = $droom;
}
foreach ($dromen as $naam => $dromen) {
    print_r("$naam heeft dit als droom: ") . PHP_EOL;
    
    foreach ($dromen as $droom) {
        print_r($droom . PHP_EOL);    
    }
}





?>