<?php

class Connect{
    public static function connect(){
        $db = new mysqli('localhos','root','','tienda_master');
        $db->query("SET NAMES 'utf-8'");
        return $db;
    }
}