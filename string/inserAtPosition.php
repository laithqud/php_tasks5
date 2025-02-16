<?php 

$sentence='The brown fox';

$array=explode(' ',$sentence);

$array[0]=$array[0] . ' quick';

echo implode(' ',$array);

echo '<br> <a href="removeFromStr.php">next question'

?>