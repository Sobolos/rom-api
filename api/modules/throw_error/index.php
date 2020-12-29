<?php
class throw_error{
    function init($params){
        $errorcode = [
            1 => "invalid command",
            2 => "no such file",
            3 => "no read file",
            4 => "empty request",
            5 => "command not found",
        ];
        $response = ["errco" => $params['code'], "errdesc" => $errorcode[$params['code']]];
        echo json_encode($response);
        return true;
    }
}
