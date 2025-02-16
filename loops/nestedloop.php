<?php 


$ss=['A','B','C','D','E'];

for($i=0;$i<=4;$i++){
    for($j=3;$j>=$i;$j--){
        echo 'A ';
    }
    for($x=0;$x<=$i;$x++){
        echo ' '.$ss[$i];
    }
    echo '<br>';
 }

echo '<br> <a href="nestedloopNumber.php">next question';

?>