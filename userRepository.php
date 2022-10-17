<?php

require_once "connection.php";
require_once "user.php";

class UserRepository{
    private static $connection = null;
    
    public function __construct(){
        if (is_null(self::$connection)){
            $credentials = credentials();
            self::$connection = new mysqli(
                $credentials["server"],
                $credentials["user"],
                $credentials["password"],
                $credentials["database"]
            );
            if  (self::$connection->connect_error){
                $error = "Error al conectarse a la base de datos". self::$connection->connect_error;
                self::$connection = null;
                die($error);
            }
            self::$connection->set_charset("utf8");
        }
    }
    
    //En esta query hay que agregar los nombres de las columnas como Esteban los haya puesto en la BD
    public function login($user, $password){
        $q = "SELECT id, password, name, surname FROM user WHETE user = ?";
    }
}