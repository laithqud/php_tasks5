<?php 


function armstrong($num){
    $a=$num%10;
    $b=($num%100)-$a;
    $c=(($num-$a)-$b)/100;
    $b=$b/10;


    $a=$a*$a*$a;
    $b=$b*$b*$b;
    $c=$c*$c*$c;

    $armNum= $a+$b+$c;
    return $armNum == $num? "$num is Armstrong Number" : "$num is NOT Armstrong Number";
}

echo armstrong(153);
echo   '<br><a href="palindrom.php">next question'

?>