<?php
use core\component;

class stat extends component {
    function init($params){
        $query = $this->db->query("SELECT `session_id` FROM `session`");
        $conn = count($query);

        $memory_used = memory_get_usage(true)/1000000;
        return json_encode(['conn'=>$conn, 'mem_used'=>$memory_used]);
    }
}