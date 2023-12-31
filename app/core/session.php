<?php

namespace mvc\core;

class session{

public function __construct()
{
    @session_start();
}

public static function set($key,$value)
{
    $_SESSION[$key]=$value;
}

public static function get($key)
{

    if(isset($_SESSION[$key])){
        return $_SESSION[$key];
    }
}

public static function stop(){
    session_unset();
}
}