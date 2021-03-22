<?php

namespace App\Database;

class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        return "Mysql conectado!\n";
    }

    public function executeQuery($query)
    {
        return "Query executada no Mysql\n";
    }

}