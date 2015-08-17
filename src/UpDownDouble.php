<?php
/**
 * This file is part of the UpDown.Double
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace UpDown\Double;

class UpDownDouble
{
    private $push_counter = 0;
    private $current_val = 0;

    public function app($data)
    {
        $this->oddOrEven($data);
    }

    public function oddOrEven($data)
    {
        if($data % 2 == 0) {
            var_dump('偶数');
        }
        else {
            var_dump('奇数');
        }
    }
}
