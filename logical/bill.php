<?php 

$unit=20;

if($unit <=50){
    echo $unit*2.50;
}
else if($unit <=150){
    echo $unit*5.00;
}
else if($unit <=250){
    echo $unit*6.20;
}
else if($unit >250){
    echo $unit*7.50;
}

echo '<br> <a href="calculator.php">next question';

?>