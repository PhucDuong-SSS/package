<?php

use Test\ConnectDatabase;

require_once 'Config.php';
require_once 'ConnectDatabase.php';


class Guestbook {
    private $db;
    public function __construct()
    {
        $this->db  =new ConnectDatabase();
    }
}
// check connect
$get = new Guestbook();





