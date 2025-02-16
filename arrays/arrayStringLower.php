<?php 

$colors = array("RED","BLUE", "WHITE","YELLOW");

$string=implode(' ', $colors);

$x=strtolower($string);

var_dump(explode(' ',$x));
?>