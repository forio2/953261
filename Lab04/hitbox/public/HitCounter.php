<?php
    $count = file_get_contents(__DIR__."/../includes/count.txt");
    $count++;
    file_put_contents(__DIR__."/../includes/count.txt", $count);
    include __DIR__."/../templates/HitCounter.html.php";
?>
