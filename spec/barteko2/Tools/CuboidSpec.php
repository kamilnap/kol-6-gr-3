<?php

namespace spec\barteko2\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('barteko2\Tools\Cuboid');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(987)->getH()->shouldReturn(987);
    }
    
    function it_should_calculate_cuboid()
{
    $this->setA(5)->setB(2)->setH(2)->cuboid()->shouldReturn(28);
}
}