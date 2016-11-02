<?php

error_reporting(E_ALL);
ini_set('error_reporting', 1);

require_once __DIR__.'/vendor/autoload.php';

$testRequest = new \california\hotel\Request();
$testRequest->RegisterNewCustomer();
$testRequest->StaffReport();
