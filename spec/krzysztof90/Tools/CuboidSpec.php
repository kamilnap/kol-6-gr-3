<?php

namespace spec\krzysztof90\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysztof90\Tools\Cuboid');
    }
		
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(439)->getH()->shouldReturn(439);
    }

    function it_should_calculate_area()
    {
        $this->setA(5)->setB(7)->setH(4)->area()->shouldReturn(96);
    }
		
}
