<?php

echo "voer gewenste tafel in: ";
$tafel = readline();
echo "voer begin van tafels in: ";
$begin = readline();
echo "voer eind toe van tafels: ";
$end = readline();

for ($counter = $begin; $counter < $end;$counter++) {
    $product = $counter * $tafel;
    echo $counter."x".$end."=".$product."\n";
}

?>