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
            //echo "ошибка - нет модуля: $module";
        }
    }
}