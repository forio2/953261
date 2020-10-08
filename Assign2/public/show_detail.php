<?php
    ob_start();
    $priQuestion = $_POST['priQuestion'];
    $topicQuestion = $_POST['topicQuestion'];
    $detailQuestion = $_POST['detailQuestion'];
    $nameQuestion = $_POST['nameQuestion'];
    include __DIR__.'/../templates/detail.html.php';
    $output = ob_get_clean();
    include __DIR__.'/../templates/layout.html.php';
?>