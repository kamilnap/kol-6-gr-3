<?php

namespace spec\mrskowron\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('mrskowron\Tools\Cuboid');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(987)->getH()->shouldReturn(987);
    }
    
    function it_should_calculate_sum()
    {
        $this->setA(2)->setB(3)->setH(4)->sum()->shouldReturn(40);
    }
}
