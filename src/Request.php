<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 6:38
 */

namespace california\hotel;


class Request extends HotelRequest
{
    public function RegisterNewCustomer()
    {
        $testCustomer = new \california\hotel\Customers\DefaultCustomer();
        $testCustomer->setCustomerInfo('Victor','38','male');
        $testCustomer->numVisits(1001);
        $testCustomer->getCustomerName();
        echo $this->HotelName() . ' is always happy to see you!';
    }
}