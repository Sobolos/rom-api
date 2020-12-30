<?php


use core\component;

class throw_error extends component {
    function init($params){
        $errorcode = [
            1 => "invalid command",
            2 => "no such file",
            3 => "no read file",
            4 => "empty request",
            5 => "command not found",
        ];
        $response = ["errco" => $params['code'], "errdesc" => $errorcode[$params['code']]];

        $update = $this->db->query("UPDATE `session` SET `last_activity_time` = NOW() WHERE `session_id` = :uid", ["uid" => $params["uid"]]);

        return json_encode($response);
    }
}