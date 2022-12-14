<?php

echo "type enter om te beginnen of stop om te stoppen.";
$stop = readline();
while ($stop != "stop") {
    echo "voer getal voor speler1 in: ";
    $speler1 = readline();
    echo "voer getal voor speler2 in: ";
    $speler2 = readline();
    if ($speler1 > $speler2) {
        echo "speler1 heeft gewonnen!\n";
    }else {
        echo "speler2 heeft gewonnen!\n";
    }
    echo "Wil je stoppen? [stop]";
    $stop = readline();
    strtolower($stop);
}

?>