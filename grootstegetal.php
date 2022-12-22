<?php
//open the file and store it inside $randomtxt.
//$randomtxt = fopen("random.txt", "r");
//read the $randomtxt and read for 48 bytes (i checked the byte size of file)
//$numbers = fread($randomtxt, "48");
//print out the numbers.
//echo $numbers;
//use explode function to make the values of $numbers an array.
//$numbers2 = explode("\n",$numbers);
//print out the maximum value of $numbers2
//echo "\n\nmaximum number = ".max($numbers2);

$randomtxt = fopen("random.txt","r");
$max = 0;

while (!(feof($randomtxt))) {
    $line = fgets($randomtxt);
    echo $line;
    if($line >$max) {
        $max = $line;
    }
}
echo "\n\nHet grootste getal = ".$max;
?>