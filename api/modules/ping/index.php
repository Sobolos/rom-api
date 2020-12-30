<?php

use core\component;

class  ping extends component {
    function init($params){
        $update = $this->db->query("UPDATE `session` SET `last_activity_time` = NOW() WHERE `session_id` = :uid", ["uid" => $params["uid"]]);

        return json_encode(
            [
            "resp"=>"pong",
            "data"=>[1,2,3,4,5]
            ]
        );
    }
}