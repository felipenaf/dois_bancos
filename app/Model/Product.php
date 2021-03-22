<?php

namespace App\Model;

use App\Database\DBConnectionInterface;

class Product
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        print $this->dbConnection->connect();
    }

    public function get()
    {
        $query = 'select * from x';
        print $this->dbConnection->executeQuery($query);
    }
}
