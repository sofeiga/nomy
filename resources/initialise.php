<?php

    require_once 'db/dbh.php';
    require_once 'config.php';
    
    $db = new dbh($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['database'], $config['db']['port']);
    
    $user = getUser();
    
    
//    exit(var_dump($user->username));

    

function getUser() {
    $user = new stdClass();
    $user->username = 'Dickboii';
    return $user;
}
           