<?php

use core\component;

class connect extends component {
    function init($params){
        $data = [
            "session_id" => md5(time()+rand(0, 100)),
        ];
        $insert = $this->db->query("INSERT INTO `session` (`session_id`, `last_activity_time`) VALUES (:session_id, NOW())", $data);

        echo json_encode(["result"=>"success", "session_id"=>$data["session_id"]]);
        return true;
    }

    function cancel(){

    }
}