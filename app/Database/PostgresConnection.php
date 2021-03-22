<?php

namespace App\Database;

class PostgresConnection implements DBConnectionInterface
{
    public function connect()
    {
        return "Postgres conectado!\n";
    }

    public function executeQuery($query)
    {
        return "Query executada no Postgres\n";
    }

}
