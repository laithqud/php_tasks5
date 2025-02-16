<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$shortest = strlen($words[0]);
$longest = strlen($words[0]);

foreach ($words as $word) {
    $length = strlen($word);
    if ($length < $shortest) {
        $shortest = $length;
    }
    if ($length > $longest) {
        $longest = $length;
    }
}

echo "The shortest array length is $shortest. The longest array length is $longest.\n";
?>
