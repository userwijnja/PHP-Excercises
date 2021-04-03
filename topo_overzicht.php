<?php

$input = readline("Hoeveel landen wil je toevoegen? ");

$topo = [];

foreach (range(1, $input) as $aantal) {
    $land = readline("Welk land wil je toevoegen? ");
    $stad = readline("Wat is de hoofdstad van " . $land . "? ");
    $topo[$land] = $stad;
}
    
    echo "De volgende landen en steden zitten in de database: " . PHP_EOL;
foreach ($topo as $land => $stad) {
    echo $land . " - " . $stad . PHP_EOL;
}


?>
