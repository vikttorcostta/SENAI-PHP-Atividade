<?php

include 'Connect.php';

class Pessoa {
    private string $nome;
    private string $telefone;
    private string $email;

    public function __construct(string $nome, string $telefone, string $email) {
    
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function cadastrar ($nome, $telefone, $email) {

        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        
        $conn = new Connect();
        $conn->getConnection();
        $stmt = $conn->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:nome, :telefone, :email)");
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':email', $this->email);
        return $stmt->execute();
    }

    

}