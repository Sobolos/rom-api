<?php
class random{
    function init($params){
        $length = $params["len"];
        $array = [];
        for($i=0; $i<=$length; $i++)
            $array[] = $i;
        echo json_encode(
            [
                "resp"=>"random",
                "data"=>$array
            ]
        );
    }
}