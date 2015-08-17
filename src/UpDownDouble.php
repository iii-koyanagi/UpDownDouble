<?php
/**
 * This file is part of the UpDown.Double
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace UpDown\Double;

class UpDownDouble
{
    const ONE_FIVE_NINE = '1,5,9';
    const THREE_SEVEN = '3,7';

    private $push_counter = 0;
    private $current_val;

    public function app($data)
    {
        $this->setcurrentVal($data);
        while ($this->current_val != 0) {
            $this->chooseExec($this->current_val);
        }
        return $this->push_counter;
    }

    public function chooseExec($data)
    {
        $result = $this->oddOrEven($data);
        if($result === 'even') {
            $this->divideByTwo($data);
        }
        elseif($result === 'odd' ) {
            if ($data >= 10) {
                $this->checkTwoDigitOfOddData($data);
            }

            elseif ($data === 3) {
                $this->minusOne($data);
            }

            else {
                $this->checkOneDigitOfOddData($data);
            }
        }
    }

    public function oddOrEven($data)
    {
        if($data % 2 == 0) {
            $result = 'even';//偶数
        }
        else {
            $result = 'odd';//奇数
        }
        return $result;
    }

    public function divideByTwo($data)
    {
        $divided_data = $data / 2;
        $this->addPushCounter();
        $this->setCurrentVal($divided_data);
    }

    public function checkTwoDigitOfOddData($data)
    {
        $two_digit = $this->getDigit($data, 2);
        $one_digit = $this->getDigit($data, 1);
        $result = $this->oddOrEven($two_digit);
        $one_digit_result = $this->checkOneDigit($one_digit);

        if($result === 'even') {
            if ($one_digit_result === '1,5,9') {
                $this->minusOne($data);
            }
            elseif ($one_digit_result === '3,7') {
                $this->plusOne($data);
            }
        }
        elseif($result === 'odd' ) {
            if ($one_digit_result === '1,5,9') {
                $this->plusOne($data);
            }
            elseif ($one_digit_result === '3,7') {
                $this->minusOne($data);
            }
        }
    }

    public function checkOneDigitOfOddData($data)
    {
        $result = $this->oddOrEven($data);
        $one_digit_result = $this->checkOneDigit($data);

        if($result === 'even') {
            if ($one_digit_result === '1,5,9') {
                $this->plusOne($data);

            }
            elseif ($one_digit_result === '3,7') {
                $this->minusOne($data);
            }
        }
        elseif($result === 'odd' ) {
            if ($one_digit_result === '1,5,9') {
                $this->minusOne($data);
            }
            elseif ($one_digit_result === '3,7') {
                $this->plusOne($data);
            }
        }
    }

    public function checkOneDigit($one_digit)
    {
        $one_digit_result = null;
        if (in_array($one_digit, array(1, 5, 9))) {
            $one_digit_result = '1,5,9';
        }
        elseif (in_array($one_digit, array(3, 7))) {
            $one_digit_result = '3,7';
        }
        return $one_digit_result;
    }

    public function getDigit($data, $digit_number)//$digit_numberは桁数
    {
        $str_data = (string)$data;
        $str_digit = substr($str_data, -$digit_number, 1);
        $digit = (int)$str_digit;
        return $digit;
    }

    public function minusOne($data)
    {
        $minus_data = $data - 1;
        $this->addPushCounter();
        $this->setCurrentVal($minus_data);
    }

    public function plusOne($data)
    {
        $plus_data = $data + 1;
        $this->addPushCounter();
        $this->setCurrentVal($plus_data);
    }

    public function addPushCounter()
    {
        $this->push_counter += 1;
    }

    public function setCurrentVal($data)
    {
        $this->current_val = $data;
    }

    public function reset()
    {
        $this->push_counter = 0;
        $this->current_val = 0;
    }
}
