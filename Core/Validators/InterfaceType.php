<?php
/**
 * Created by PhpStorm.
 * User: bigturtle
 * Date: 22.05.2017
 * Time: 17:14
 */

namespace Core\Validators;


interface InterfaceType
{
    public function type($data, $value);
}