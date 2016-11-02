<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 7:55.
 */

namespace california\hotel\Staff;

class Reception implements StaffInterface
{
    public function introduce()
    {
        echo 'We will provide a comfortable and pleasant stay of every guest in our hotel thanks to the services of exceptional quality.'.'<br>';
    }
}
