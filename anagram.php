<?php 
    function is_anagram($A, $B) 
    { 
        if (count_chars($A, 1) == count_chars($B, 1)) 
            echo("YES"); 
        else
            echo ("NO");     
    } 

    $input = trim(fgets(STDIN));
    $inputs = explode(' ', $input);
    $A = $inputs[0];
    $B = $inputs[1];
    is_anagram($A, $B);
    
?> 
