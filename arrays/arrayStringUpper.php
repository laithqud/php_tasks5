<?php 

$colors = array("red","blue", "white","yellow");

$string=implode(' ', $colors);

$x=strtoupper($string);

var_dump(explode(' ',$x));
?>