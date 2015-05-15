<?php

namespace kamilnap\Tools;

class prostopadloscian
{
    private $a;
    private $b;
    private $h;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }
    
      public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
    
     public function getH()
    {
        return $this->h;
    }
    
    function it_should_calculate_obliczenia()
{
    $this->setA(1)->setB(2)->setB(3)->obliczenia()->shouldReturn(18);
}

    public function obliczenia()
    {
       return 2*$this->a * $this->h + $this->b*$this->h*2;
    }
}
