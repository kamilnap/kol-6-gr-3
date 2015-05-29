<?php

namespace spec\Tomek22811\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleboczneSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Tomek22811\Tools\Poleboczne');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(111)->getA()->shouldReturn(111);
        $this->setB(222)->getB()->shouldReturn(222);
        $this->setC(333)->getC()->shouldReturn(333);
    }
    function it_should_calculate_pole()
    {
    $this->setA(3)->setB(2)->setC(3)->poleboku()->shouldReturn(30);
    }
}
