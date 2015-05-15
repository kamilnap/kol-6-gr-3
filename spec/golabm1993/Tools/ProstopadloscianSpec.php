<?php

namespace spec\golabm1993\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProstopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('golabm1993\Tools\prostopadloscian');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(12)->getA()->shouldReturn(12);
        $this->setB(34)->getB()->shouldReturn(34);
        $this->setH(56)->getH()->shouldReturn(56);
    }
    
    function it_should_calculate_pole()
    {
        $this->setA(2)->setB(3)->setH(4)->prostopadloscian()->shouldReturn(40);
    }
}
