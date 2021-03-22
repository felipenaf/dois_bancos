<?php

require_once 'vendor/autoload.php';

use App\Database\{MySQLConnection, PostgresConnection};
use App\Model\Product;

// 0 = Postgres | 1 = Mysql
$banco = 1;

switch ($banco) {
    case 1:
        $db = new MySQLConnection;
        break;
    
    default:
        $db = new PostgresConnection;
        break;
}

$p = new Product($db);
$p->get();

print "\n";