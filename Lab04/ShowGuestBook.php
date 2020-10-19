<?php
    $file = file('Guestbook.txt');
    $count = 1;
    foreach($file as $x){
        $split = explode(",", $x);
        echo "<b>No.$count </b><br>";
        echo "first name: $split[0] <br>";
        echo "last name: $split[1] <br>";
        $count++;
    }
?>