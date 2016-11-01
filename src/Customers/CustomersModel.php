<?php

namespace california\hotel\Customers;


abstract class CustomersModel
{
    public $name;
    public $age;
    public $gender;
    public function __construct()
    {
        echo 'New Abstract CustomerModel'.'<br>';
    }
    public function setCustomerInfo($name,$age,$gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function getCustomerName()
    {
        echo 'Hello '.$this->name.'<br>';
    }
    abstract public function somePayment();
    abstract public function numVisits($count);
}