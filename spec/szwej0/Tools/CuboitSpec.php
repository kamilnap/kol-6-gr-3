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
}
