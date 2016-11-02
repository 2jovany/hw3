<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.11.16
 * Time: 7:53.
 */

namespace california\hotel\Staff;

class Kitchen implements StaffInterface
{
    public function introduce()
    {
        echo 'Our dishes will please not only your stomach, and make your soul sing!'.'<br>';
    }
}
