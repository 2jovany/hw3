<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 7:54.
 */

namespace california\hotel\Staff;

class Clearing implements StaffInterface
{
    public function introduce()
    {
        $message = 'We will make sure that the room was clean and always smelled of spring!'.'<br>';

        return $message;
    }
}
