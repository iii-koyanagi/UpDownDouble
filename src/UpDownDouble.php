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
    private $current_val;

    public function app($data)
    {
        $this->setcurrentVal($data);
        $this->oddOrEven($data);
    }

    public function oddOrEven($data)
    {
        if($data % 2 == 0) {
//            var_dump('偶数');
            $this->divideByTwo($data);
        }
        else {
//            var_dump('奇数');
            $this->checkTwoDigitOfOddData($data);
        }
    }

    public function divideByTwo($data)
    {
        $divided_data = $data / 2;
        $this->addPushCounter();
        $this->setCurrentVal($divided_data);
    }

    public function checkTwoDigitOfOddData($data)
    {
        $str_data = (string)$data;
        $two_str_digit = substr($str_data, -2,1);
        $two_digit = (int)$two_str_digit;

        var_dump($two_digit);
    }

    public function addPushCounter()
    {
        $this->push_counter += 1;
    }

    public function setCurrentVal($data)
    {
        $this->current_val = $data;
    }
}
