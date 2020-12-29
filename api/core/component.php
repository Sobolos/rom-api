<?php
namespace core;

include "../api/config/dbconnect.php";
use config\db;
class component{
    public $db;

    public function __construct()
    {
        $db_settings = require '../api/config/dbconfig.php';
        $this->db = new db($db_settings['db']);
    }
}