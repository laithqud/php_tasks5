<?php 


$string1 = 'dragonball';
$string2 = 'dragonboll';

$length = min(strlen($string1), strlen($string2));
$position = -1;
$char1 = '';
$char2 = '';

for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        $position = $i;
        $char1 = $string1[$i];
        $char2 = $string2[$i];
        break;
    }
}

if ($position !== -1) {
    echo "First difference between two strings at position $position: \"$char1\" vs \"$char2\"";
} else {
    echo "The strings are identical up to their length.";
}


echo '<br> <a href="varDump.php">next question'


?>