<?php
    include __DIR__.'/../templates/layout.html.php';
    include __DIR__.'/../templates/add.html.php';

    if(!empty($_POST['inputTopicName'])){
        $addsong = $_POST['inputTopicName'];
        $url = "http://localhost:80/953261/Lab08/public/api.php/song/"; 
        $requestData = ['songname'=>$addsong];
        $requestData = json_encode($requestData);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData); 
        curl_setopt($ch, CURLOPT_POST, true);
        $response = curl_exec($ch);
        curl_close($ch);
    }
?>