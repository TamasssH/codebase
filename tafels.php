<?php
//een stop variable gemaakt omdat het anders undefined is.
$stop = "";
//while loop om te checken of de stop variable stop is en eindig dan het programma.
while ($stop != "stop") {
    //de user input lezen.
    echo "Enter your table: ";
    $table = readline();
    echo "Enter begin of table: ";
    $begin = readline();
    echo "Enter end of table: ";
    $end = readline();
    //de voor loop om het antwoord te printen.
    for ($counter = $begin; $counter <= $end;$counter++) {
        $product = $counter * $table;
        echo $counter." x ".$table." = ".$product."\n";
    }
    //optie om opniew te beginnen.
    echo "Do you want to continue? [ja/stop]\n";
    $stop = readline();
}


?>