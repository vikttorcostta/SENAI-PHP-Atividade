<?php

namespace Pessoa;

require __DIR__ . 'vendor/autoload.php';


class Pessoa {
    
    public int $codigo;
    public string $nome;
    public float $altura;
    public int $idade;
    public string $dataNascimento;
    public string $escolaridade;
    public float $salario;

    public function __construct($codigo,$nome, $altura, $idade, $dataNascimento, $escolaridade, $salario){
        
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->dataNascimento = $dataNascimento;
        $this->escolaridade = $escolaridade;
        $this->salario = $salario;
        
    }

    public function crescer($centimetros){
        $this->altura += $centimetros;
    }

    public function formar($titulo) {
        $this->escolaridade = $titulo;
    }

    public function envelhecer ($idade){
        $this->idade += $idade;
    }

    /**
     * METÓDOS GETTERS E SETTERS
     */

     public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setEscolaridade($escolaridade){
        $this->escolaridade = $escolaridade;
    }

    public function getEscolaridade(){
        return $this->escolaridade;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }


}