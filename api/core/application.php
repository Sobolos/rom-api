<?php
namespace core;
require "loader.php";

class API{
    function init($query){
        $command = $query['cmd'];
        $uid =  $query['uid'];
        $params = array_slice($query, 1);

        if($command === "connect"){
            return $this->loader($command, $params);
        }
        elseif($this->loader("check_session", ["uid" => $uid])) {
            //обновить время сессии;
            return $this->loader($command, $params);
        }
        else{
            return $this->loader("throw_error", ["code" => 4]);
        }
    }

    function loader($command, $params){
        $component = new MODULE();
        return $component->load($command, $params);
    }
}