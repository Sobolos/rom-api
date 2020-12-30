<?php
use core\component;

class fwget extends component {
    function init($params){
        $file = $params["file_name"];
        $start = $params["start"];
        $bytes = $params["bytes"];
        $file = fopen("../server/fws/".$file.".rom", "rb");

        $file_hex = $this->getByte($file,$start, $bytes);

        return json_encode(["buff" => $file_hex]);
    }

    function getByte($f,$start, $count){
        $bytes = "";

        for($byte=$start; $byte <= $start+$count; $byte++)
            fseek($f,$byte);
            $bytes = $bytes.bin2hex(fread($f,$byte));

        return $bytes;
    }

}