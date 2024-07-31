        <?php
        $inputString = fgets(STDIN);
        
        function removeDuplicates($string) {
            $characters = str_split($string);
            $uniqueCharacters = array_unique($characters);
            return implode('', $uniqueCharacters);
        }
        $result = removeDuplicates($inputString);
        
        echo "$result";
        ?>
