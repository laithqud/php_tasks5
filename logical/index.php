<?php 

$year = 2013;
echo '<br>';
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a leap year!";
} else {
    echo "This year $year is not a leap year.";
}

echo '<br> <a href="season.php">next question';
?>