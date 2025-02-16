<?php 


function palindrome($str){
   $newStr=strtolower(preg_replace("/[^A-Za-z0-9]/",'',$str));

   return $newStr == strrev($newStr) ? 'Yes it is a palindrome' : 'NO it is not a palindrome' ;
}

echo palindrome("Eva, can I see bees in a cave?");
echo   '<br><a href="duplicate.php">next question'

?>