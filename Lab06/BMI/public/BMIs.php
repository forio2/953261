<?php
    include __DIR__.'/../include/DatabaseConnection.php';
    $table = allBMIs($pdo);
    ob_start();
    $count = count($table);
    totalBMIs($count);
    include __DIR__.'/../templates/BMIs.html.php';
    $output = ob_get_clean();

    include __DIR__.'/../templates/layout.html.php';
?>