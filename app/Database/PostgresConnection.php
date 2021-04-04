<?php

namespace App\Database;

class PostgresConnection implements DBConnectionInterface
{
    private $instance;

    public function __construct() {
	    $this->instance = sprintf(
            "host=%s port=%s dbname=%s user=%s password=%s", 
            'localhost', '5432', 'VAM', 'felipe', '123'
        );

    }

    public function executeQuery($query)
    {
        return "Query executada no Postgres\n";
    }

}