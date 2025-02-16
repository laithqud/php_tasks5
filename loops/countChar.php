<?php 

$word= "Orange Coding Academy";
$charWanted='c';
$count=0;
$splitStr=str_split(strtolower($word));

foreach($splitStr as $splitted){
    if($splitted == $charWanted){
        $count++;
    }
}

echo $count;

echo '<br><a href="table.php">next question'

?>