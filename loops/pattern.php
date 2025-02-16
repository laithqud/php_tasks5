<?php 

$alphabet = range('A', 'Z');

$height = 5;

for ($i = 1; $i <= $height; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo $alphabet[$j] . ' ';
    }
    echo "<br>";
}


for ($i = $height - 1; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo $alphabet[$j] . ' ';
    }
    echo "<br>";
}

?>
