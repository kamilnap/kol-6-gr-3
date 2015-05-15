<?php

namespace spec\kamilnap\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class prostopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilnap\Tools\prostopadloscian');
    }
    
     function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(321)->getH()->shouldReturn(321);
    }
    
    function it_should_calculate_obliczenia()
{
    $this->setA(1)->setB(2)->setH(3)->obliczenia()->shouldReturn(18);
}

}
