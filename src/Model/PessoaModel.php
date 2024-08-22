<?php

namespace Pessoa;

use DateTime;

require __DIR__ . 'vendor/autoload.php';


class Pessoa {
    
    private int $codigo;
    private string $nome;
    private float $altura;
    private int $idade;
    private string $dataNascimento;
    private string $escolaridade;
    private float $salario;

    public function __construct(){
        
    
    }

    public function crescer(float $centimetros){
        $this->altura += $centimetros;
    }

    public function formar(string $titulo) {
        $this->escolaridade = $titulo;
    }

    public function envelhecer (int $idade){
        $this->idade += $idade;
    }

    /**
     * METÓDOS GETTERS E SETTERS
     */

     public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setAltura(float $altura){
        $this->altura = $altura;
    }

    public function getAltura(): int{
        return $this->altura;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(): int{
        return $this->idade;
    }

    public function setDataNascimento($dataNascimento){
        $data = DateTime::createFromFormat('d-m-Y', $dataNascimento);
        $this->dataNascimento = $data;
    }

    public function getDataNascimento(): string{
        return $this->dataNascimento;
    }

    public function setEscolaridade($escolaridade){
        $this->escolaridade = $escolaridade;
    }

    public function getEscolaridade(): string {
        return $this->escolaridade;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(): float{
        return $this->salario;
    }

}