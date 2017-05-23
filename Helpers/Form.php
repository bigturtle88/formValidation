<?php

/**
 * Created by PhpStorm.
 * User: bigturtle
 * Date: 21.05.2017
 * Time: 12:03
 */

namespace Helpers;

use Core\Forms\AbstractForm;
use Helpers\Validator;

/**
 * Class Form Создание формы
 * @package Helpers
 */
class Form extends AbstractForm
{
    private $method;
    private $action;
    private $fields = [];
    private $validator;

    /**
     * Form constructor.
     */
    function __construct()
    {
        $this->method = 'GET';
        $this->action = '#';
        $this->validator = new Validator();

    }

    /**
     * Метод устанавливает параметр метода передачи данных формы
     *
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Метод получает передачи данных формы
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Метод устанавливает адресс передачи данных для формы
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * Метод получает адресс передачи данных для формы
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Метод загружает параметры полей формы
     *
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    /**
     * Метод получает параметры полей формы
     *
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Метод загрушает параметр одного поля
     *
     * @param $field
     */
    public function setField($field)
    {
        array_push($this->fields, $field);
    }

    /**
     * Метод проводит валидацию полей
     *
     * @return array|void
     */
    public function validation()
    {
        return $this->validator->validation($this->fields);
    }

}