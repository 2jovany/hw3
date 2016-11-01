<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 6:38
 */

namespace california\hotel;

use california\hotel\Customers\DefaultCustomer;
use california\hotel\Staff\Clearing;
use california\hotel\Staff\Kitchen;
use california\hotel\Staff\Security;

class Request extends HotelRequest
{
    public function RegisterNewCustomer()
    {
        $testCustomer = new DefaultCustomer();
        $testCustomer->setCustomerInfo('Victor','38','male');
        $testCustomer->numVisits(1001);
        $testCustomer->getCustomerName();
        echo $this->HotelName() . ' is always happy to see you!'.'<br>';
    }
    public function StaffReport()
    {
        $housemaid = new Clearing();
        $housemaid->introduce();
        $cook = new Kitchen();
        $cook->introduce();
        $agent007 = new Security();
        $agent007->introduce();
    }
}