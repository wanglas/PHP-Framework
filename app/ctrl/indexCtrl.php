<?php
namespace app\ctrl;

/**
 *
 */

class indexCtrl{

  public function index()
  {
    $model=new \core\lib\model();
    $sql="select * from wx_user";
    $result=$model->query($sql);
    dump($result->fetchAll());
  }
}


 ?>
