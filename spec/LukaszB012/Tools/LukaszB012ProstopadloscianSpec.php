<?php

namespace spec\LukaszB012\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LukaszB012ProstopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LukaszB012\Tools\LukaszB012Prostopadloscian');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(456)->getB()->shouldReturn(456);
        $this->setH(789)->getH()->shouldReturn(789);
    }
    function it_should_calculate_pole()
{
    $this->setA(4)->setB(3)->setH(2)->pole()->shouldReturn(28);
}
}
