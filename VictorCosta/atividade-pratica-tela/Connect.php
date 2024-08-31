<?php


class Connect extends PDO {

    private static $instance = [ ];
    private $connection;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "empresa";

    private function __construct(){
        try {
            $dataSourceName = "{mysql:host=$this->servername;database=$this->database;charset=utf8}";
            parent::__construct($dataSourceName, $this->username, $this->password);

            $this->connection = new PDO($dataSourceName, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<h2>Conectado ao Banco de Dados MySQL!</h2>";

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }


    public static function getInstance(){
        if (!isset(self::$instance['default'])) {
            self::$instance['default'] = new Connect();
        }
        return self::$instance['default'];
    }

    public function getConnection(){
        return $this->connection;
    }

    public function __clone(){

    }

    public function __wakeup(){
        
    }

}

