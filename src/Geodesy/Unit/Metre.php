<?php

namespace Geodesy\Unit;


class Metre extends BaseUnit implements UnitInterface
{

    public function convert($value)
    {
        return $value * 1000;
    }

}