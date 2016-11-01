<?php

namespace california\hotel\Customers;


abstract class CustomersModel
{
    abstract function somePayment();
    abstract function numVisits($count);
}