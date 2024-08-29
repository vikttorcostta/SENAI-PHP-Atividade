<?php

/**
 * @author Victor Costa <@vikttorcostta>
 */

namespace Database;

include __DIR__ . 'config.php';

use PDO;
use PDOException;

use const Config\DATABASE;
use const Config\PASSWORD;
use const Config\SERVERNAME;
use const Config\USERNAME;

class Database extends PDO {
    
    private $database = DATABASE;
    private $username = USERNAME;
    private $servername = SERVERNAME;
    private $password = PASSWORD;

    private static $instance = [];
    private $connection;

    private function __construct(){

        try{
            $dataSourceName = "{mysql:host=$this->servername;dbname=$this->database;charset=utf8}";
            $this->connection = new PDO($dataSourceName, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Banco de dados conectado com sucesso!";
        }catch (PDOException $e){
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }

    // metodo cria uma instancia, caso não tenha. Se tiver ele retorna a que já tem criada
    public static function getInstance (){

        if (self::$instance === null) {

            self::$instance = new Database();
        }

        return self::$instance;
    }

    //retorna a conexão
    public function getConnection (){

        return $this->connection;

    }

    private function __clone() {}

    private function __wakeup(){}
}
