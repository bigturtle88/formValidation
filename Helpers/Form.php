<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.05.2017
 * Time: 12:03
 */

namespace Helpers;

use Core\Forms\AbstractForm;
use Helpers\Validator;

class Form extends AbstractForm
{
    private $method = 'GET';
    private $action = '#';
    private $fields = [];
    private $validator;

    function __construct()
    {
        $this->validator = new Validator();
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setAction($action)
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setField($field)
    {
        array_push($this->fields, $field);
    }

    public function validation()
    {
        return $this->validator->validation($this->fields);
    }

}