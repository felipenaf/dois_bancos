<?php

namespace App\Model;

use App\Database\DBConnection;

class Product extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $query = 'select * from x';
        print $this->dbConnection->executeQuery($query);
    }
}
