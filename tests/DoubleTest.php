<?php

namespace UpDown\Double;

class DoubleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Double
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new Double;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\UpDown\Double\Double', $actual);
    }

    public function testException()
    {
        $this->setExpectedException('\UpDown\Double\Exception\LogicException');
        throw new Exception\LogicException;
    }
}
