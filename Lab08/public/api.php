<?php
    require_once __DIR__.'/../include/DatabaseConnection.php';
    include __DIR__.'/../include/DatabaseFunction.php';
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = explode('/', $uri);
    if (isset($uri[6])) {
        $name = $uri[6]; 
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ($name != null) {
            $response = search($pdo, $name);
        } 
        else {
            $response = showlist($pdo);
        }
    } 
    elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = (array)json_decode(file_get_contents('php://input'), TRUE);
        $response = add($pdo,$input);
    } 
    else {
        http_response_code(400);
    }

    print_r($response);
?>