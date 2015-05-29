<?php

namespace spec\arypulak\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProstopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('arypulak\Tools\Prostopadloscian');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(345)->getH()->shouldReturn(345);
    }
    
    function it_should_calculate_prostopadloscian()
    {
        $this->setA(2)->setB(3)->setH(4)->prostopadloscian()->shouldReturn(40);
    }
}
