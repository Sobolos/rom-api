<?php
namespace core;
require "loader.php";

class API{
    function init($query){
        $command = $query['cmd'];
        $uid =  $query['uid'];
        $params = array_slice($query, 1);

        if($command === "connect"){
            $this->loader($command, $params);
        }
        elseif($this->loader("check_session", ["uid" => $uid])) {
            //обновить время сессии;
            $this->loader($command, $params);
        }
        else{
            $this->loader("throw_error", ["code" => 4]);
        }
    }

    function loader($command, $params){
        $module = new MODULE();
        return $module->load($command, $params);
    }
}