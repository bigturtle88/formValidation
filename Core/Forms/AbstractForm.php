<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.05.2017
 * Time: 12:03
 */
namespace Core\Forms;

abstract class AbstractForm
{
    private $method;
    private $action;
    private $fields = [];
    public function validation(){}
    public function submit(){}

}