<?php

namespace spec\szwej0\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CuboitSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('szwej0\Tools\Cuboit');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(343)->getH()->shouldReturn(343);

    }
    function it_should_calculate_pole()
    {
        $this->setA(3)->setB(4)->setH(5)->pole()->shouldReturn(70);
    }
}
