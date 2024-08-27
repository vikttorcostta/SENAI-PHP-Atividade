<?php

require __DIR__ . '/vendor/autoload.php';

$request = $_SERVER['REQUEST_URI'];

function route ($url, $callback){
    
    //var_dump([$url, $_SERVER['REQUEST_URI']]);
    //exit();
    if($url == $_SERVER['REQUEST_URI']){
        $callback();
        exit();
    }
}

http_response_code(404);
echo "Página não encontrada";

