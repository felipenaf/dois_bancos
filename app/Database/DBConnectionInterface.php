<?php

namespace App\Database;

interface DBConnectionInterface
{
    public function connect();

    public function executeQuery($query);
}