<?php

namespace App\Database;

abstract class DBConnection
{
    protected $dbConnection;

    protected function __construct()
    {
        // .ini file || Header || Request || etc.
        $banco = 0; // 0 = Postgres | 1 = Mysql

        switch ($banco) {
            case 1:
                $this->dbConnection = new MySQLConnection;
                break;
            
            default:
                $this->dbConnection = new PostgresConnection;
                break;
        }

    }

}
