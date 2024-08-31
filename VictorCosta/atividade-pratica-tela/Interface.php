<?php 
include 'Connect.php';
include 'Pessoa.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email  = $_POST['email'];
}


$pessoa = new Pessoa($nome, $telefone, $email);