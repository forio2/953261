<?php
$arr = array(99);
for($i =1;$i<=100;$i++){
    $arr[$i] = $i;
}
shuffle($arr);
$arr2 = array_slice($arr,0,5);
foreach($arr2 as $x){
    echo $x ."<br>";
}
?>