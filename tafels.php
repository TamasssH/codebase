<?php
//de user input lezen.
echo "Enter your table: ";
$table = readline();
echo "Enter begin of table: ";
$begin = readline();
echo "Enter end of table: ";
$end = readline();
//de voor loop die het begin en eind calculeren.
for ($counter = $begin; $counter <= $end;$counter++) {
    $product = $counter * $table;
    echo $counter." x ".$table." = ".$product."\n";
}

?>