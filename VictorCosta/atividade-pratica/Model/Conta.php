<?php

include '../Pessoa.php';

class Conta {
    public int $agencia;
    public string $codigo;
    public string $dataDeCriacao;
    public Pessoa $titular;
    public string $senha;
    public float $saldo;
    public bool $cancelada;
    
    public function __construct(int $agencia, string $codigo, string $dataDeCriacao, Pessoa $titular, string $senha, float $saldo) {
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titular = new Pessoa ();
        $this->senha = $senha;
        $this->saldo = $saldo;
        $this->cancelada = false;
    }

    /**
     * METODOS SETTERS
     */
    public function setAgencia (int $agencia) {
        $this->agencia = $agencia;
    }
    
    public function setCodigo (string $codigo) {
        $this->codigo = $codigo;
    }
    
    public function setDataDeCriacao (string $dataDeCriacao) {
        $this->dataDeCriacao = $dataDeCriacao;
    }

    public function setTitular (Pessoa $titular) {
        $this->titular = $titular;
    }

    public function setSenha (string $senha) {
        $this->senha = $senha;
    }

    public function setCancelada (bool $cancelada) {
        $this->cancelada = false;
    }

     public function setSaldo(float $saldo) {
        $this->saldo = $saldo;
    }


    /**
     * METODOS GETTERS
     */
    public function getAgencia (): int {
        return $this->agencia;
    }

    public function getCodigo (): string {
        return $this->codigo;
    }

    public function getDataDeCriacao (): string {
        return $this->dataDeCriacao;
    }

    public function getTitular (): Pessoa {
        return $this->titular;
    }

    public function getSenha (): string {
        return $this->senha;
    }

    public function getCancelada (): bool {
        return $this->cancelada;
    }

    public function getSaldo (): float {
        return $this->saldo;
    }



    /**
     * METODOS 
     */
    public function Retirar (float $valor) {
        $this->saldo -= $valor;
    }

    public function Depositar (float $valor) {
        $this->saldo += $valor;
    }

    public function ObterSaldo (): float {
        return $this->saldo;
    }
}