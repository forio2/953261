<?php
    //w/(h*h)
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $cal = $weight/($height*$height);
    $handle = fopen(__DIR__.'/../includes/BMI.txt', "a");
    fwrite($handle, "$name, $cal\n");
    fclose($handle);
    include __DIR__."/../templates/BMI.html.php";
?>