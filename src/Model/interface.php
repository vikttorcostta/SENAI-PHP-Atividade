<?php


include __DIR__ . '/model/PessoaModel.php';
include __DIR__ . '/model/ContaModel.php';

use Conta\Conta;
use Pessoa\Pessoa;


if ($_REQUEST['REQUEST_METHOD'] === 'POST') {

    //PESSOA

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $escolaridade = $_POST['escolaridade'];
    $salario = $_POST['salario'];
    $dataNascimento = $_POST['dataNascimento'];

    //CONTA

    $agencia = $_POST['agencia'];
    $cod = $_POST['cod'];
    $dataCriacao = $_POST['dataCriacao'];
    $senha = $_POST['senha'];
    $saldo = $_POST['saldo'];
    $cancelada = $_POST['cancelada'];

    //RECEPCIONAR OS DADOS DA CONTA
    $pessoa = new Pessoa($codigo, $nome, $altura, $idade, $dataNascimento, $escolaridade, $salario);
    $conta = new Conta($agencia, $cod, $dataDeCriacao, $senha, $saldo, $cancelada, $pessoa);// CRIAR O METODO CONTRUTOR PARA CARREGAR OS DADOS DA CONTA
    $conta->setTitular($pessoa);

    //TESTAR
    var_dump($conta, $pessoa);

}

