<?php

 class Conexao {
public static $instance;

public static function get_instance() {
    if(!isset(self::$instance)) {
        self::$instance = new PDO("pgsql:host=localhost;dbname=crud;", "postgres", "admin");
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return self::$instance;

}

 }
?>