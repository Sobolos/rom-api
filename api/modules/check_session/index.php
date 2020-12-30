<?php

use core\component;

class check_session extends component {
    function init($params){
        $query = $this->db->query("SELECT `session_id` FROM `session` WHERE session_id = :uid",
            [
                "uid" => $params["uid"],
            ]);
        if(count($query) > 0){
            return true;
        }else{
            return false;
        }
    }
}
