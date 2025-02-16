<?php


$marks=[60,86,95,63,55,74,79,62,50];

$grade=0;

foreach($marks as $mark){
    $grade+=$mark;
}

$grade=$grade/count(($marks));
var_dump($grade);

echo '<br>';
if ($grade <60 ) {
    echo "F";
} else if($grade<70){
    echo "D";
}
 else if($grade<80){
    echo "C";
}
 else if($grade<90){
    echo "B";
}
 else if($grade<100){
    echo "A";
}



?>