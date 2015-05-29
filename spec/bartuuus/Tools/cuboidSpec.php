<?php

namespace spec\bartuuus\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class cuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('bartuuus\Tools\cuboid');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(222)->getA()->shouldReturn(222);
        $this->setB(333)->getB()->shouldReturn(333);
        $this->setH(444)->getH()->shouldReturn(444);
    }

    function it_should_calculate_area()
    {
        $this->setA(2)->setB(3)->setH(4)->area()->shouldReturn(40);
    }
}
