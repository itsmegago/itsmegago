<?php
class config{
    private $user = 'root';
    private $password = '';
    public $pdo = null;

    public function con(){
          try {
             $this->pdo=new PDO('mysql:host=127.0.0.1;dbname=accounts',$this->user,$this->password)
          } catch (PDOExeption$th) {
             die($th->getmessage());
          }
          return $this->pdo;

    }
}
?>