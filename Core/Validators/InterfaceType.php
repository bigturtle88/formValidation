<?php
/**
 * Created by PhpStorm.
 * User: bigturtle
 * Date: 22.05.2017
 * Time: 17:14
 */

namespace Core\Validators;

/**
 * Interface InterfaceType Описывает валидацию по типу данных
 * @package Core\Validators
 */
interface InterfaceType
{
    /**
     * Тип данных
     *
     * @param mixed $data
     * @param string $value
     * @return bool
     */
    public function type($data, $value);
}