<?php

namespace spec\Gojira\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class gojiraCuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Gojira\Tools\gojiraCuboid');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(987)->getH()->shouldReturn(987);
    }

    function it_should_calculate_ppBocznej()
    {
        $this->setA(1)->setB(2)->setH(2)->ppBocznej()->shouldReturn(12);
    }
}
