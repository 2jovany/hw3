<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 6:33.
 */

namespace california\hotel;

abstract class HotelRequest
{
    final public function HotelName()
    {
        return 'Hotel California';
    }
    abstract public function RegisterNewCustomer();
}
