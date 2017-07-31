<?php

class dbh {

    public $conn;

    public function __construct($host, $user, $password, $database, $port) {
        try {
            $this->conn = mysqli_connect($host, $user, $password, $database, $port);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getUser() {
        $user = new stdClass();
        $user->username = 'Dickboii';
        return $user;
    }

}
