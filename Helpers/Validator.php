<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.05.2017
 * Time: 12:03
 */

namespace Helpers;

use Core\Validators\AbstractValidator;


class Validator extends AbstractValidator
{
    private $fields = [];

    public function validation($fields)
    {
        $this->fields = $fields;

        foreach ($this->fields as $key => $field) {
            $this->fields[$key]['info'] = [];

            if ( isset($field['validation'])){
                foreach ($field['validation'] as $param => $value) {
                   if (method_exists($this, $param) && !empty($value)) {
                     $this->fields[$key]['info'][$param] = $this->$param($this->fields[$key]['value'],$value);
                 } else {
                     $this->fields[$key]['info'][$param] = null;
                 }

                }
            }

        }
        return $this->fields;
    }

}