<?php

namespace spec\pawlo\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PawloCuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pawlo\Tools\PawloCuboid');
    }
        function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);
        $this->setB(3)->getB()->shouldReturn(3);
        $this->setH(4)->getH()->shouldReturn(4);
    }
    
    function it_should_calculate_area()
    {
        $this->setA(2)->setB(3)->setH(4)->area()->shouldReturn(40);
    }
    
}
