<?php


route('/', function () {
   require __DIR__ . '/view/paginaPrincipal.php';
});

route('/cadastroPessoa', function () {
    echo 'cadastroPessoa';
});

route('/cadastroConta', function () {
    echo 'cadastroConta';
});

