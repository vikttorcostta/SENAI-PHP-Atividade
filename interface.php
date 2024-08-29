<?php 

/**
 * @author Victor Costa <@vikttorcostta>
 */

use Pessoa;
use Conta;

require __DIR__ . 'Pessoa.php';
require __DIR__ . 'Conta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Dados da pessoa
    $codigo         = $_POST['codigo'];
    $nome           = $_POST['nome'];
    $idade          = $_POST['idade'];
    $altura         = $_POST['altura'];
    $nascimento     = $_POST['nascimento'];
    $escolaridade   = $_POST['escolaridade'];
    //Dados da conta
    $codigoBanco = $_POST['codigoBanco'];
    $agencia = $_POST['agencia'];
    $dataCriacao = $_POST['dataCriacao'];
    $senha = $_POST['senha'];
    $saldo = $_POST['saldo'];
    $cancelado = $_POST['cancelado'];

    $pessoa = new Pessoa($nome, $codigo, $altura, $idade, $nascimento, $escolaridade);
    $conta = new Conta($agencia, $codigoBanco, $dataCriacao, $pessoa, $senha, $saldo, $cancelado);
    //cria o metódo construtor para carregar os dados da conta
    

    //Testar
    var_dump($conta, $pessoa);    

}