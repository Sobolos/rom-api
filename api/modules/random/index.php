<?php
class random{
    function init($params){
        $length = $params["len"];
        $array = [];
        for($i=0; $i<=$length; $i++)
            $array[] = $i;

        $update = $this->db->query("UPDATE `session` SET `last_activity_time` = NOW() WHERE `session_id` = :uid", ["uid" => $params["uid"]]);

        return json_encode(
            [
                "resp"=>"random",
                "data"=>$array
            ]
        );
    }
}