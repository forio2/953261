<?php
    include __DIR__.'/../include/DatabaseConnection.php';
    $class = new HitCounter($pdo);
    $totalCount = $class->count();
    include __DIR__.'/../template/HitCounter.html.php';
?>