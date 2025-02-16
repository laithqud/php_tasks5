<?php 


$terms = 10;

$first = 0;
$second = 1;

echo $first . ", ";
echo $second;

for ($i = 3; $i <= $terms; $i++) {
    $next = $first + $second;
    echo ", " . $next;
    $first = $second;
    $second = $next;
}


echo '<br> <a href="countChar.php">next question';

?>