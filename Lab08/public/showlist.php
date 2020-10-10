<?php
    include '../templates/layout.html.php';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:80/953261/Lab08/public/api.php/song/"); 
    curl_setopt( $ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) { 
        echo curl_error($ch); 
    } 
    $result = json_decode($response,true);
    include '../templates/show.html.php';
?>