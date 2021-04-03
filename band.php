<?php
$album = array("Album 1" => 15, "Secondo" => 20, "3 times" => 25, "quatro" => 30);

count($album);
echo 'Het albumoverzicht:' . PHP_EOL;
foreach ($album as $naam => $prijs) {
    echo $naam . ' kost € ' . $prijs . PHP_EOL;
    $totaal += $prijs;
}
echo 'Het totaalbedrag van alle albums is: €' . $totaal . PHP_EOL;
echo "De gemiddelde prijs is: € " . $totaal / count($album);
?>