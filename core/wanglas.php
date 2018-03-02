<?php
namespace core;   //注意分号

class wanglas {
  public static $classMap=array();

  static public function run(){
    $route= new \core\lib\route();
    $ctrlClass=$route->ctrl;
    $action=$route->action;
    $ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
    // dump($ctrlfile); 检查控制器文件路径
    $ctrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
    if(is_file($ctrlfile)){
      include $ctrlfile;
      $ctrl=new $ctrlClass();
      $ctrl->$action();
    }else {
      throw new \Exception("找不到控制器", $ctrlClass);
    }
  }
  //自动加载
  static public function load($class){
    // dump($class);
    // dump(WANGLAS.'\\'.$class.'.php');
    if(isset($classMap[$class])){
      return ture;
    }else{
      $class=str_replace('\\','/',$class);
      $file=WANGLAS.'\\'.$class.'.php';
      if(is_file($file)){
        include $file;
        self::$classMap[$class]=$class;
      }else{
        return false;
      }
    }
  }
}

 ?>
