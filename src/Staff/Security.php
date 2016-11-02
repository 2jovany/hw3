<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 7:56.
 */

namespace california\hotel\Staff;

class Security implements StaffInterface
{
    public function introduce()
    {
        $message = 'We care about your safety. And if someone would break the silence of the night... - we will make him a massage.'.'<br>';

        return $message;
    }
}
