<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 14.10.2017
 * Time: 20:06
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/autoload.php';

$controller = new \App\Controllers\Article();
$controller->actionIndex();

//print '<pre>';
//var_dump($view->categories);
//print '</pre>';