<?php
/**
*   个人练手框架
*   author：wanglas
*   time： 2018-2-25
*/
/*  入口文件
*   1.定义常量
*   2.引入函数库
*   3.加载框架
*/

//定义常量
define('WANGLAS',realpath('./'));  //注意realpath
define('CORE',WANGLAS.'\core');
define('APP',WANGLAS.'\app');
define('MODULE','app');

define('DEBUG',true);
if(DEBUG){
  ini_set('display_error','on');
}else{
  ini_set('display_error','off');
}
//引入类库
include WANGLAS.'/vendor/autoload.php';
//引入函数库
include  CORE.'/common/function.php';
//启动框架
include CORE.'/wanglas.php';

spl_autoload_register('\core\wanglas::load');

\core\wanglas::run();
