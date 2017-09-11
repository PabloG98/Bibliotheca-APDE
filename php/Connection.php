<?php
class Connection {
    static $_instance;

    private function __construct() {
        $this->conectar();
    }

    private function __clone() {
        
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function conectar() {
        //$link = mysqli_connect('45.55.164.164', 'system-client', 'Volksw@gen1937');
        $link = mysqli_connect('192.168.1.8', 'ccanel', 'Cdczjr%$$(1118');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }
        //echo 'Connected successfully';
        //mysql_select_db("sdtpersonal");
        mysqli_select_db($link, 'librarydb');
        mysqli_query($link, "SET NAMES 'utf8'");
        /* @mysql_query("SET NAMES 'utf8'"); */
        return $link;
    }
}
