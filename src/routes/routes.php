<?php

require __DIR__ . '/../View/cadastoConta.php';
require __DIR__ . '/../View/cadastroPessoa.php';
require __DIR__ . '/../View/loginPessoa.php';
require __DIR__ . '/../View/paginaPrincipal.php';

route('/', function () {
    return '/../View/paginaPrincipal.php';
});

route('/login', function () {
    echo "login";
});

