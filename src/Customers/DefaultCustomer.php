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
    /**
     * @return string
     */
    public function __toString()
    {
        $result = parent::__toString();
        $result .= 'New DefaultCustomer created'.'<br>';

        return $result;
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
        $result = '';
        if ($count < 10) {
            $result = 'Ordinary customer'.'<br>';
        } elseif ($count < 100) {
            $result = 'Regular customer'.'<br>';
        } elseif ($count >= 100) {
            $result = 'VIP'.'<br>';
        }

        return $result;
    }
}
