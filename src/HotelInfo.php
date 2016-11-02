<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 6:33.
 */

namespace california\hotel;

abstract class HotelInfo
{
    private $RegName = 'Hotel California';
    final public function getHotelName()
    {
        return $this->RegName;
    }
    abstract public function registerNewCustomer();
}
