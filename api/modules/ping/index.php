<?php

use core\component;

class  ping extends component {
    function init($params){
        return json_encode(
            [
            "resp"=>"pong",
            "data"=>[1,2,3,4,5]
            ]
        );
    }
}