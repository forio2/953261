<?php
    if(!empty($_POST['inputTopicName'])){
        $qtopic = $_POST['inputTopicName'];
        $qdetail = $_POST['formTopicDetail'];
        $qname = $_POST['inputUserName'];
        include __DIR__.'/../include/DatabaseConnection.php';
        insertQuestion($qtopic, $qdetail, $qname, $pdo);
    }
    ob_start();
    include __DIR__.'/../templates/form_question.html.php';
    $output = ob_get_clean();

    include __DIR__.'/../templates/layout.html.php';
?>