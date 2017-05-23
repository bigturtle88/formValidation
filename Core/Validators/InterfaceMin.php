<?php
/**
 * Created by PhpStorm.
 * User: bigturtle
 * Date: 22.05.2017
 * Time: 17:14
 */

namespace Core\Validators;

/**
 * Interface InterfaceMin Описывает валидацию минимальное количество символов
 * @package Core\Validators
 */
interface InterfaceMin
{
    /**ё
     * Минимальное количество
     *
     * @param mixed $data
     * @param int $value
     * @return bool
     */
    public function min($data, $value);
}