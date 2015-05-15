<?php

namespace spec\Shuwax\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleboczneSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Shuwax\Tools\Poleboczne');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setC(345)->getC()->shouldReturn(345);
    }
    function it_should_calculate_pole()
    {
    $this->setA(2)->setB(3)->setC(4)->pole()->shouldReturn(40);
    }
    
    
}
