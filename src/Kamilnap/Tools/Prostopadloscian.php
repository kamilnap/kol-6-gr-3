<?php

namespace Kamilnap\Tools;

class Prostopadloscian
{

    private $A;
    private $B;
    private $H;

    public function setA($A)
    {
        $this->A = $A;

        return $this;
    }

    public function setB($B)
    {
        $this->B = $B;

        return $this;
    }
    
     public function setH($H)
    {
        $this->H = $H;

        return $this;
    }

    public function getA()
    {
        return $this->A;
    }

    public function getB()
    {
        return $this->B;
    }
    
      public function getH()
    {
        return $this->H;
    }
    
    function it_should_calculate_wynik()
{
    $this->setA(2)->setB(3)->setH(4)->wynik()->shouldReturn(40);
}
}
