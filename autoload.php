<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 14.10.2017
 * Time: 20:23
 */

/**
 * @param string $className
 */
function __autoload(string $className)
{
    require_once $_SERVER['DOCUMENT_ROOT'] . '/' . $className . '.php';
}