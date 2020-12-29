<?php

use core\component;

class ping extends component {
    function init($params){
        echo json_encode(["resp"=>"pong"]);
    }
}