<?php

require __DIR__ . '/src/routes/routes.php';

$request = $_SERVER['REQUEST_URI'];

function route ($url, $callback){
    if($url == $_SERVER['REQUEST_URI']){
        $callback();
        exit();
    }
}

http_response_code(404);
echo "Página não encontrada";

