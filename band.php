<?php
echo "Het albumoverzicht:\n\n";
$albums = array(
    "4.50" => "We are not your kind is 4,50",
    "9" => "Liberating Manchester is 9,-",
    "10" => "All hope is gone is 10,-",
    "5" => "Iowa is 5,-",
);
$totaal = 4.5 + 9 + 10 + 5;
$gemiddelde = $totaal / 4;
foreach ($albums as $value) {
    echo $value. PHP_EOL;
}
echo "\nHet totaalbedrag is: $totaal". PHP_EOL;
echo "De gemiddelde prijs is: $gemiddelde". PHP_EOL;

?>
