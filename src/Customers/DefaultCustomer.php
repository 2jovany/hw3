<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 0:57.
 */

namespace california\hotel\Customers;

class DefaultCustomer extends CustomersModel
{
    public function __construct()
    {
        parent::__construct();
        echo 'New DefaultCustomer created'.'<br>';
    }

    public function somePayment()
    {
        // TODO: Implement somePayment() method.
    }

    /**
     * @param $count integer
     */
    public function numVisits($count)
    {
        if ($count < 10) {
            echo 'Ordinary customer'.'<br>';
        } elseif ($count < 100) {
            echo 'Regular customer'.'<br>';
        } elseif ($count >= 100) {
            echo 'VIP'.'<br>';
        }
    }
}
