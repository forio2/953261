<?php
    include '../templates/layout.html.php';
    include '../templates/search.html.php';
    if(!empty($_POST['inputTopicName'])){
        $name = $_POST['inputTopicName'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:80/953261/Lab08/public/api.php/song/{$name}"); 
        curl_setopt( $ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $result = json_decode($response,true);
        print_r($response);
    }
?>
