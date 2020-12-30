<?php
use core\component;

class fwinfo extends component {
    function init($params){
        $file = $params["file_name"];
        $file = "../server/fws/".$file.".rom";

        $file_size = filesize($file);
        $file_md = md5_file($file);
        $dt = date("dmYHi");

        echo json_encode(["fwsize" => $file_size, "fwmd5" => $file_md, "dt" => $dt]);
    }
}