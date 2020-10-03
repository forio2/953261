<?php
    if(!empty($_POST['Name'])){
        $name = $_POST['Name'];
        $weight = $_POST['Weight'];
        $height = $_POST['Height'];
        $BMI = $weight/($height*$height);
        include __DIR__.'/../include/DatabaseConnection.php';
        insertBMIs($name, $weight, $height, $BMI, $pdo);
    }
    ob_start();
    include __DIR__.'/../templates/addBMI.html.php';
    $output = ob_get_clean();

    include __DIR__.'/../templates/layout.html.php';
?>