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

}