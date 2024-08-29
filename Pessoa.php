<?php
/**
 * Representa a abstração de pessoa
 * @author Leonardo <leonardo.lucena@ba.docente.senai.br> 
 */
class Pessoa {
    private $nome;              // string
    private $codigo;            // int
    private $altura;            // int
    private $idade;             // int
    private $nascimento;        // date
    private $escolaridade;      // string 

    public function __construct(string $nome, 
                                int $codigo, 
                                int $altura, 
                                int $idade, 
                                string $nascimento, 
                                string $escolaridade) {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->nascimento = $nascimento;
        $this->escolaridade = $escolaridade;
    }

    public function crescer(int $centimentros) {}
    public function envelhecer(int $ano) {}
    public function formar(string $titulo) {}
}