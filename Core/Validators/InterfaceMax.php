<?php
/**
 * Created by PhpStorm.
 * User: bigturtle
 * Date: 22.05.2017
 * Time: 17:14
 */

namespace Core\Validators;

/**
 * Interface InterfaceMax Описывает валидацию валидацию максимальное количество символов
 * @package Core\Validators
 */
interface InterfaceMax
{
    /**
     * Максимальное количество
     *
     * @param mixed $data
     * @param int $value
     * @return bool
     */
    public function max($data, $value);
}