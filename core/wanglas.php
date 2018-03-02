<?php
namespace core;   //注意分号

class wanglas {
  public static $classMap=array();

  static public function run(){
    $route= new \core\lib\route();
    dump($route);
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
