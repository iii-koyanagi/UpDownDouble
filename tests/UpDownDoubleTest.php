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

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\UpDown\Double\UpDownDouble', $actual);
    }

    public function testException()
    {
        $this->setExpectedException('\UpDown\Double\Exception\LogicException');
        throw new Exception\LogicException;
    }

    public function testApp()
    {
        $this->skeleton->app(27);
    }
}
