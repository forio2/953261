<?php
    $stock = "1 lemon, 2 cabbages, and 101 eggs";
    function minusOne($matches){
        $matches[1] = $matches[1] - 1;
        if($matches[1] <= 1){
            $pattern = '/s$/';
            $replacement = "";
            $string = $matches[2];
            $matches[2] = preg_replace($pattern, $replacement, $string);
        }
        return $matches[1]." ".$matches[2];
    }
    $pattern = '/(\d+) +(\w+)/';
    echo preg_replace_callback($pattern, 'minusOne', $stock);
?>
