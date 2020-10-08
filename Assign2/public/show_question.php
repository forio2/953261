<?php
    include __DIR__.'/../include/DatabaseConnection.php';
    $table = allQuestion($pdo);
    ob_start();
    include __DIR__.'/../templates/question.html.php';
    $output = ob_get_clean();

    include __DIR__.'/../templates/layout.html.php';
?>