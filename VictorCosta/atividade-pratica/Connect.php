<?php

namespace Connect;
use PDO;

class Connect extends PDO{
    
    private const HOST = 'localhost';
    private const DATABASE = 'victorsenai';
    private const USERNAME = 'root';
    private const PASSWORD = '';

    public function __construct(){

        parent::__construct("mysql:host=".self::HOST.";dbname=".self::DATABASE, self::USERNAME, self::PASSWORD);
       
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->exec("SET CHARACTER SET utf8");
        echo "<h2>Conectado ao Banco de Dados MySQL!</h2>";

    }

}


$conn = new Connect();
var_dump($conn);






