<?php

$min = 11;
$max = 20;

$numbers = range($min, $max);

shuffle($numbers);

$randomNumbers = array_slice($numbers, 0, 10);

echo implode(" ", $randomNumbers);
?>
