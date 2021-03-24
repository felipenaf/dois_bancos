<?php

namespace App\Database;

interface DBConnectionInterface
{
    public function executeQuery($query);
}