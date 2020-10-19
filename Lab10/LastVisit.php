<?php
    if (!isset($_COOKIE['visits'])) { 
        setcookie("visits", 1, time() + 3600 * 24 * 365);
        $value = date("d/m/Y H:i:s");
        setcookie("time",$value, time() + 3600 * 24 * 365);
    }
    else{
        $visits = $_COOKIE['visits'];
        $time = $_COOKIE['time'];
        $visits+=1;
        setcookie("visits", $visits, time() + 3600 * 24 * 365);
        if ($visits > 0) {
            echo "You have visited this page $visits. <br>";
            echo $time;
        } 
    }
    if(isset($_COOKIE['visits']) == 0){
        echo 'This is your first visit!';
    }
    include __DIR__.'/LastVisit.html.php';
?>