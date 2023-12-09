<?php
require_once 'php\function.php';
spl_autoload_register(function($class){
   require_once $_SERVER['DOCUMENT_ROOT'].'/brewcafe/class/'.$class.'.php';
})
?>