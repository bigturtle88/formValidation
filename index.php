<?php
/**
 * Created by PhpStorm.
 * User: bigturtle
 * Date: 21.05.2017
 * Time: 11:40
 */

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

spl_autoload_register('autoload');

$Form = new \Helpers\Form();

$fields = [
    ['name' => 'name', 'value' => 'aaa', 'type' => 'text', 'validation' => ['max' => 4, 'min' => 1, 'type' => 'string']],
    ['name' => 'fio', 'value' => 'bbb', 'type' => 'text', 'validation' => ['max' => 14, 'min' => 3, 'type' => 'int']]
];

$Form->setFields($fields);
$Form->setField(['name' => 'picture', 'value' => 'bbb2', 'type' => 'text']);

echo "<pre>";
var_dump($a->validation());
