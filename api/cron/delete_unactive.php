<?php
include "../../api/config/dbconnect.php";

use config\db;

class delete_unactive{
    public $db;

    public function __construct()
    {
        $db_settings = require '../../api/config/dbconfig.php';
        $this->db = new db($db_settings['db']);
    }

    public function perform(){
        $query = $this->db->query("DELETE FROM `session` WHERE `session`.`last_activity_time` - NOW() < 1");
    }
}

$delete_unactive = new delete_unactive();
$delete_unactive->perform();
