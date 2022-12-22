<?php
$min = 1;
$max = 42;
$trekking = array();
$randomnumbers = array();
//vraag user 6 keer om 1 getal tussen de 1 & 42 + check of het getal tussen de 1 & 42 is anders opnieuw beginnen.
for ($i = 1; $i < 7; $i++) {
    $usernumber = readline("Voer getal ".$i." in: \n");
    if ($usernumber >= $min && $usernumber <= $max && ctype_digit($usernumber)) {
            array_push($trekking,$usernumber);
        }else {
            $i--;
            echo "Verkeerd!, voer getal opnieuw in.\n";
        }
    }
//generate 6 random getallen om te vergelijken met de 6 gekozen getallen.
for ($i = 0; $i < 6;$i++) {
    $random = rand($min,$max);
    array_push($randomnumbers,$random);
}
//door de $trekking array heen loopen om te kijken of er values zijn die overeen komen met $randomnumbers zo ja dan $match++
$match = 0;
foreach ($trekking as $value) {
    if (in_array($value,$randomnumbers)) {
        $match++;
    }
}
//checken hoeveel de user krijgt als prijs.
switch ($match) {
    case 3:
        echo "Je hebt 10euro gewonnen!\n";
        break;
    case 4:
        echo "Je hebt 1000euro gewonnen!\n";
        break;
    case 5:
        echo "Je hebt 100.000euro gewonnen!\n";
        break;
    case 6:
        echo "Je hebt 10.000.000euro gewonnen!\n";
        break;
    default:
        echo "Helaas je hebt niks gewonnen!\n";
        break;
}
?>