<?php
    $file =  file(__DIR__.'/../includes/BMI.txt');
    $count = 0;
    foreach($file as $x){
        $count++;
    }
    include "Layout.html.php";
?>