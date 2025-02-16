<?php 

$num=[1,2,9,3,4,10];
$firstIndex=$num[0];

foreach($num as $index){
    if($index > $firstIndex)
    {
        $firstIndex = $index;
    }
}

echo $firstIndex;

echo '<br> <a href="bill.php">next question';

?>