<?php
    //if(!empty($_POST['topicAnwer'])){}
    ob_start();
    include __DIR__.'/../include/DatabaseConnection.php';
    $b = $_POST['pri'];
    $table = Question($pdo, $b);
    include __DIR__.'/../templates/form_answer.html.php';
    $output = ob_get_clean();

    include __DIR__.'/../templates/layout.html.php';
?>