<?php
class User
{
  private $pdo;

  public function __construct()
  {
    try {
      $this->$pdo = new PDO('mysql:host=localhost;dhname=movies_db', 'root', 'root');
    }
    catch(Exception $e){
      file_put_contents('log.txt', $e->getMessage() . "\n", FILE_APPEND);
    }
  }

  public function save()
  {
    //insert
  }

  public function update()
  {
    //update
  }

  public function delete()
  {
    //buscar un solo usuario
  }

  public function get()
  {
    //setect de todos los usuarios
    $sql = 'select * from  usuers';
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute();
    return $tmt->fetchall(PDO::FETCH_CLASS,self::class);

  }
}



 ?>
