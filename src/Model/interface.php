<?php


include __DIR__ . '../model/PessoaModel.php';
include __DIR__ . '../model/ContaModel.php';

use Conta\Conta;
use Pessoa\Pessoa;


if ($_REQUEST['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $escolaridade = $_POST['escolaridade'];
    $salario = $_POST['salario'];
    $dataNascimento = $_POST['dataNascimento'];

    //RECEPCIONAR OS DADOS DA CONTA
    $pessoa = new Pessoa($codigo, $nome, $altura, $idade, $dataNascimento, $escolaridade, $salario);
    $conta = new Conta();// CRIAR O METODO CONTRUTOR PARA CARREGAR OS DADOS DA CONTA
    $conta->setTitular($pessoa);
    //TESTAR
    var_dump($conta, $pessoa);

}

