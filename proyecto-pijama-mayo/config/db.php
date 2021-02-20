<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost','root','','pijamas_mayo_dreams');
        $db->query("SET NAMES 'utf-8'");
        return $db;
    }
}