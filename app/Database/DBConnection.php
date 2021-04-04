<?php

namespace App\Database;

use Exception;

abstract class DBConnection
{
    protected $dbConnection;

    protected function __construct()
    {
        // .ini file || Header || Request || etc.
        $banco = 'postgres';

        switch ($banco) {
            case 'mysql':
                $this->dbConnection = new MySQLConnection;
                break;
            
            case 'postgres':
                $this->dbConnection = new PostgresConnection;
                break;

            default:
                throw new Exception("No database selected");
                break;
        }

    }

}
