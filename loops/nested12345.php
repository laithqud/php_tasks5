<?php 

$ss=['A','B','C','D','E'];

for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($j==$i){
            echo ' '.$j;
        }
        else{
            echo ' ' .  0;
        }
    }
    echo '<br>';
 }


echo '<br> <a href="factorial.php">next question';

?>