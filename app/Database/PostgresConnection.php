<?php

namespace App\Database;

class PostgresConnection implements DBConnectionInterface
{
    private $instance;

    public function __construct() {
        $this->instance = pg_connect("host=localhost port=5432 dbname=VAM user=postgres password=") or
        die ("Não foi possível conectar ao servidor Postgres\n");
    }

    public function executeQuery($query)
    {
        return "Query executada no Postgres\n";
    }

}