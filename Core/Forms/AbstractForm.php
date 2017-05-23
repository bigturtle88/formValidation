<?php

/**
 * Created by PhpStorm.
 * User: bigturtle
 * Date: 21.05.2017
 * Time: 12:03
 */
namespace Core\Forms;

/**
 * Class AbstractForm Описывает класс Формы
 * @package Core\Forms
 */
abstract class AbstractForm
{
    private $method;
    private $action;
    private $fields = [];

    public function validation(){}
    public function submit(){}

}