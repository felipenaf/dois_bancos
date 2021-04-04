<?php

var_dump($_SERVER);

require_once 'vendor/autoload.php';

use App\Model\Product;

$p = new Product();
$p->get();

print "\n";