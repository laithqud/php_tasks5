<?php 

$num=49;

function primeNumber($n){
    if($n<=1){
        return 'not a prime';
    }
    if($n%2==0 || $n%3==0 || $n%5==0 || $n%7==0){
        if($n==2 || $n==3 || $n==5 || $n==7){
            return 'a prime';
        }
        else{return 'not a prime';}
    }
    else{
        return 'a prime';
    }
}

echo primeNumber($num);

echo '<br> <a href="reverse.php">next question'

?>