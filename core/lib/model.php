<?php
namespace core\lib;

/**
 *
 */
class model extends \PDO
{

  public function __construct()
  {
    $dsn="mysql:host=localhost;dbname=hlweb";
    $username='root';
    $passwd='54wanglas';
    try {
      parent::__construct($dsn,$username,$passwd);
    } catch (\PDOException $e) {
      dump($e->getMessage());
    }
  }

}


 ?>
