<?php

namespace Conta;

use DateTime;
use Exception;

require __DIR__ . '/vendor/autoload.php';

class Conta {

    public string $agencia;
    public string $codigo;
    public string $dataDeCriacao;
    public string $senha;
    public float $saldo;
    public bool $cancelada;

    public function __construct($agencia, $codigo, $dataDeCriacao, $senha, $saldo, $cancelada)
    {
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->senha = $senha;
        $this->saldo = $saldo;
        $this->cancelada = $cancelada;
    }

    public function retirar(float $valor): void {

        if ($valor <= 0) {
            throw new Exception("O valor a ser retirado precisa ser maior que zero");
        }

        if ($valor > $this->saldo) {
           throw new Exception("Saldo insuficiente");
        }

        $this->saldo -= $valor;
    }

    public function despositar (float $valor): void{

        if ($valor <= 0) {
            throw new Exception("O valor a ser retirado precisa ser maior que zero");
        }

        $this->saldo +=$valor;
    }

    public function obterSaldo (): float{
        return $this->saldo;
        
    }

    /**
     * METODOS GETTERS E SETTERS
     */

    public function setAgencia(string $agencia){
        $this->agencia = $agencia;
    }

    public function getAgencia(): string{
        return $this->agencia;
    }

    public function setCodigo(string $codigo){
        $this->codigo = $codigo;
    }

    public function getCodigo(): string{
        return $this->codigo;
    }

    public function setDataDeCriacao (string $dataDeCriacao){
        $data = DateTime::createFromFormat("d-m-Y", $dataDeCriacao);
        $this->dataDeCriacao = $data;

    }

    public function getDataDeCriacao (): string {
        return $this->dataDeCriacao;
    }

    public function setSenha(string $senha){
        $this->senha = $senha;
    }

    public function getSenha(): string {
        return $this->senha;
    }
    
    public function setCancelada(bool $cancelada) {
        $this->cancelada = $cancelada;
    }

    public function getCancelada (): bool {
        return $this->cancelada;
    }

}