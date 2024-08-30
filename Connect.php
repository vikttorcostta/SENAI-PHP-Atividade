<?php

/**
 * @author Victor Costa <@vikttorcostta>
 */

namespace Connect;

include './config.php';

use PDO;
use PDOException;


class Connect extends PDO {
    
    private static $instance = [];
    private $connection;
    private $database = DATABASE;
    private $username = USERNAME;
    private $servername = SERVERNAME;
    private $password = PASSWORD;

    private function __construct(){
    
        // evita que o objeto seja instanciado fora da classe
        try {

            $dataSourceName = "{mysql:host=$this->servername;dbname=$this->database;charset=utf8}";
            parent::__construct($dataSourceName, $this->username, $this->password);
            
            $this->connection = new PDO($dataSourceName, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Banco de dados conectado com sucesso!";

        } catch (PDOException $e){
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }

    // metodo cria uma instancia, caso não tenha. Se tiver ele retorna a que já tem criada
    public static function getInstance () {

        if (self::$instance === null) {

            self::$instance = new Connect();
        }

        return self::$instance;
    }

    //retorna a conexão
    public function getConnection () {

        return $this->connection;

    }

    private function __clone() {}

    //private function __wakeup(){}
}


// Testando a conexão. Está dando erro pois o construtor está privado, para resolver
// a classe que de Banco de dados quando for criada vai herdar com extends as propriedades
// da Classe Connect, e os metodos e atributos privados poderão ser acessados.

$conn = new Connect();
$conn->getConnection();

var_dump(Connect::getInstance(), $conn->getConnection());