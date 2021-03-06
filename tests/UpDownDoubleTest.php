<?php

namespace UpDown\Double;

class UpDownDoubleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UpDownDouble
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new UpDownDouble;
    }

    public function testApp()
    {
        $data = $this->getData();
        foreach ($data as $key => $value) {
            $push_counter = $this->skeleton->app($key);
            $this->assertEquals($push_counter, $value);
            $this->skeleton->reset();
        }
    }

    public function getData()
    {
        $data =[
            59 => 9,
            10 => 5,
            11 => 6,
            12 => 5,
            13 => 6,
            14 => 6,
            15 => 6,
            16 => 5,
            17 => 6,
            18 => 6,
            27 => 8,
            28 => 7,
            29 => 8,
            30 => 7,
            31 => 7,
            32 => 6,
            33 => 7,
            34 => 7,
            35 => 8,
            41 => 8,
            71 => 9,
            1023 => 12,
            1024 => 11,
            1025 => 12,
            1707 => 17,
            683 => 15,
            123 => 10,
            187 => 11,
            237 => 12,
            5267 => 18,
            6737 => 18,
            14796 => 20,
            18998 => 20,
            23820 => 20,
            30380 => 21,
            31119 => 21,
            33301 => 20,
            33967 => 21,
            35443 => 22,
            35641 => 22,
            43695 => 23,
            44395 => 23,
            44666 => 22,
            987 => 14,
            1021 => 13,
            1019 => 13,
            1015 => 13,
            1007 => 13,
            1011 => 14,
            1003 => 14,
            983 => 14,
            999 => 14,
            2731 => 18,
            6827 => 20,
            10923 => 21,
            27307 => 23,
            43691 => 24,
            109227 => 26,
            174763 => 27];
        return $data;
    }
}
