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
}
