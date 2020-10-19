<?php
$test = array(14, 17, 39.9, '91/');
foreach($test as $n){
    echo "$n\n Is it numberic?: ";
    echo (is_numeric($n))? 'yes' : 'no';
    echo "<br>Round?: ";
    echo round($n);
    echo "<br>";
    echo "Even: ";
    if(is_numeric($n)){
        echo ($n%2 == 0) ? 'yes<br><br>': 'no<br><br>';
    }else {
        echo 'not numberic<br><br>';
    }
}
?>