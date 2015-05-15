<?php

namespace krzysztof90\Tools;

class Cuboid
{
    private $a;
    private $b;
    private $h;

    public function setE($a)
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

    public function area()
    {
        return $this->a * $this->h * 2 + $this->b * $this->h * 2;
    }

    public function getE()
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
}