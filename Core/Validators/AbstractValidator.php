<?php

/**
 * Created by PhpStorm.
 * User: bigturtle
 * Date: 21.05.2017
 * Time: 12:03
 */

namespace Core\Validators;

use Core\Validators\InterfaceMax;
use Core\Validators\InterfaceMin;
use Core\Validators\InterfaceType;

abstract class AbstractValidator implements InterfaceMax, InterfaceMin, InterfaceType
{

    public function validation()
    {
    }

    public function max($data, $value)
    {
        if (strlen($data) <= (int)$value) return true;
        return false;

    }

    public function min($data, $value)
    {
        if (strlen($data) >= (int)$value) return true;
        return false;

    }

    public function type($data, $value)
    {
        if (gettype($data) == $value) return true;
        return false;

    }
}