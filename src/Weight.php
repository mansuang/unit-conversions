<?php

namespace Mansuang\UnitConversions;
use DeepCopy\Exception;

class Weight
{
    private $kilograms;

    public static function fromKilograms(float $kilograms): self {


        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(Type $var = null): float
    {
        return $this->kilograms * 2.204623;
    }
}
