<?php

namespace App\Database;

use PDO;

class MySQLConnection implements DBConnectionInterface
{
    private $instance;

    public function __construct() {
        $this->instance = new PDO(
            'mysql:host=localhost;dbname=VAM', 'felipe', '123', [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]
        );

        $this->instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
    }

    public function executeQuery($query)
    {
        return "Query executada no Mysql\n";
    } 

}