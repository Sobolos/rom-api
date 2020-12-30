<?php

use core\component;

class disconnect extends component {
    function init($params){
        $data = [
            "id" => $params["uid"],
        ];
        $delete = $this->db->query("DELETE FROM `session` WHERE `session_id` = :id", $data);

        return json_encode(["result"=>"success", "status"=>"disconnected"]);
    }
}