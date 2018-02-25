<?php
/**
*   个人练手框架
*   author：wanglas
*   time： 2018-2-25
*
*/
//入口文件

// echo phpinfo();
require __DIR__.'/vendor/autoload.php';

$var = array(
    'a simple string' => 'in an array of 5 elements',
    'a float' => 1.0,
    'an integer' => 1,
    'a boolean' => true,
    'an empty array' => array(),
);
dump($var);
