<?php

namespace Gojira\Tools;

class gojiraCuboid
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

    public function ppBocznej()
    {
        return 2 * $this->A * $this->H + 2 * $this->B * $this->H;
    }
}
