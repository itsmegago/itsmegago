<?php
class config{
 private $user = 'root';
 private $password ='';
 public  $pdo = null;
 
 public function con(){
    try {
        $this->pdo = new PDO('mysql:host =127.0.0.1;dbname=todo_list', $this->user,$this->password);
    } catch (PDOException $th) {
        die($th->getMessage());
    }
    return $this->pdo;
 }
}
?>