<?php 

function removeDuplicates($array) {
    return array_unique($array);
}


print_r(removeDuplicates([2, 4, 7, 4, 8, 4])); 
?>

