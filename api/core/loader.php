<?php
namespace core;

class MODULE{

    public function load($module, $params){
        $directory = "../api/modules/".$module."/";
        if(is_dir($directory)){
            require $directory."index.php";
            $component = new $module;
            return $component->init($params);
        }
        else{
            $this->load("throw_error", ["code" => 1]);
        }
        return true;
    }
}