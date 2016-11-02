<?php

namespace california\hotel\Customers;

abstract class CustomersModel
{
    private $name;
    private $age;
    private $gender;
    public function __toString()
    {
        return 'New Abstract CustomerModel'.'<br>';
    }

    /**
     * @param $name string
     * @param $age integer
     * @param $gender string
     */
    public function setCustomerInfo($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function getCustomerName()
    {
        return 'Hello '.$this->name.'<br>';
    }
    abstract public function somePayment();
    abstract public function numVisits($count);
}
