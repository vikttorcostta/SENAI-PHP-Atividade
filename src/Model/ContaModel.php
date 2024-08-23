<?php

namespace Conta;

use DateTime;
use Exception;
use Pessoa\Pessoa;

require __DIR__ . '/vendor/autoload.php';

class Conta {

    private string $agencia;
    private string $cod;
    private string $dataDeCriacao;
    private string $senha;
    private float $saldo;
    private bool $cancelada;
    private Pessoa $titular;

    public function __construct($agencia, $cod, $dataDeCriacao, $senha, $saldo, $cancelada, Pessoa $titular, $codigo, $nome)
    {
        $this->titular->setNome($nome);
    }

    /**
     * METODOS
     */

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
        $this->cod = $codigo;
    }

    public function getCodigo(): string{
        return $this->cod;
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