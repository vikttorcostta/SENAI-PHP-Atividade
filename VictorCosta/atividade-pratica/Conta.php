<?php
/**
 * Representa a abstração de conta
 * @author Leonardo <leonardo.lucena@ba.docente.senai.br> 
 */
class Conta {
    private $agencia;           // int
    private $codigo;             // int
    private $dataDeCriacao;     // date
    private $titular;           // Pessoa
    private $senha;             // string
    private $saldo;             // float    
    private $cancelado;         // boolean

    public function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelado) {
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titular = $titular;
        $this->senha = $senha;
        $this->cancelado = $cancelado;
        $this->saldo = $saldo; 
    }

    public function setTitular(Pessoa $pessoa) { 
        $this->titular = $pessoa;
    }

    public function retirar(float $quantia) {}
    public function depositar(float $quantia) {}
    public function obterSaldo() {}
}