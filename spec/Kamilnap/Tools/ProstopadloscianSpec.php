<?php

namespace spec\Kamilnap\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProstopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kamilnap\Tools\Prostopadloscian');
    }
}
