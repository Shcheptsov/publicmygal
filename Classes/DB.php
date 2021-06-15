<?php
namespace Classes;

class DB {
    private static $db;
    public function getInstance(){
        if (!self::$db){
           $db = new \mysqli('localhost', 'root', '', 'mygal');
           if($db->errno){
               die("Error, while connnect to MySql");
           }
           self::$db = $db;
        }
        return self::$db;
    }
    private function __construct(){} //запрет отпраки при создании объекта класса
    private function __clone(){}//запрет клонирования 
}