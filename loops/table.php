<?php 

echo '<table cellpadding="3px" cellspacing="0px" border="1">';
for($i=1;$i<=6;$i++){
    echo '<tr>';
    for($j=1;$j<=5;$j++){
        echo "<td> $i * $j = ".($i*$j)."</td>";
    }
    echo '</tr>';
}

echo '<br> <a href="fizzBuzz.php">next question'

?>