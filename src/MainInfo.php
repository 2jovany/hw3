<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 6:38.
 */

namespace california\hotel;

use california\hotel\Customers\DefaultCustomer;
use california\hotel\Staff\Clearing;
use california\hotel\Staff\Kitchen;
use california\hotel\Staff\Security;

class MainInfo extends HotelInfo
{
    /**
     * @return DefaultCustomer|string
     */
    public function registerNewCustomer()
    {
        $testCustomer = new DefaultCustomer();
        $testCustomer->setCustomerInfo('Victor', '38', 'male');
        $result = $testCustomer;
        $result .= $testCustomer->numVisits(1001);
        $result .= $testCustomer->getCustomerName();
        $result .= $this->getHotelName();
        $result .= ' is always happy to see you!'.'<br>';

        return $result;
    }
    public function staffReport()
    {
        $housemaid = new Clearing();
        $cook = new Kitchen();
        $agent007 = new Security();

        return $housemaid->introduce().$cook->introduce().$agent007->introduce();
    }
}
