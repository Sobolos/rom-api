<?php
require "core/application.php";
use core\API;

spl_autoload_register(function ($class){
    $path = str_replace('\\', '/', $class.'.php');
    if(file_exists($path))
    {
        require $path;
    }
});

$api = new API();

if(isset($_POST['query'])){
    $query = $_POST['query'];
    $api->init($query);
}else{
    $query = ["cmd" => "throw_error", "code" => 4];
    $api->init($query);
}
