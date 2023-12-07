<?php
require_once 'Function.php';

 spl_autoload_register(function($class){
    require_once $_SERVER['DOCUMENT_ROOT'].'/todolist/class/'.$class.'.php';
});
?> 