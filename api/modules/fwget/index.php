<?php
use core\component;

class fwget extends component {
    function init($params){
        $file = $params["file_name"];
        $start = $params["start"];
        $bytes = $params["bytes"];
        $file = fopen("../server/fws/".$file.".rom", "rb");

        $file_hex = $this->getByte($file,$start, $bytes);

        echo json_encode(["buff" => $file_hex]);
    }

    function getByte($f,$start, $count){
        $bytes = "";

        for($byte=$start; $byte <= $start+$count; $byte++)
            fseek($f,$byte);
            $bytes = $bytes.pack('H*', str_replace(' ', '', sprintf('%u', CRC32(fread($f,$byte)))));

        return $bytes;
    }

}