<?php

error_reporting(E_ALL);
ini_set('error_reporting', 1);

require_once __DIR__ . '/vendor/autoload.php';

$checkModel = new \california\hotel\Customers\defaultCustomer();
$checkModel->numVisits(1001);