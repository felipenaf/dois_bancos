<?php

require_once 'vendor/autoload.php';

use App\Database\{MySQLConnection, PostgresConnection};
use App\Model\Product;

$p = new Product();
$p->get();

print "\n";