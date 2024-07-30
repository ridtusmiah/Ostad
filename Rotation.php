<?php
    function rotation_string($S, $T)
    {
        // if both strings are not same length then stop
        if (strlen($S) != strlen($T))
           echo "Not Same Length";
         
         // concatenate $S to itself, if both
         // strings are of same length
         if (strlen($S) == strlen($T))
            $S = $S.$S;
         if (strpos($S, $T) > 0)
            echo "True";
         else 
            echo "False";
    }

    // Driver code
    $input1 = fgets(STDIN);
    $input2 = fgets(STDIN);        
    rotation_string($S, $T);
?>