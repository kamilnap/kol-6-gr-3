<?php

namespace spec\krzyspole\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class krzyspoleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzyspole\Tools\krzyspole');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(156)->getH()->shouldReturn(156);
    }
   
    function it_should_calculate_area()
    {
        $this->setA(5)->setB(7)->setH(3)->area()->shouldReturn(72);
    }
}
