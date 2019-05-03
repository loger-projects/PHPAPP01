<?php

namespace App\Controllers;

class PDOController {
    public static $conn;
    public static $query;
    public static $rows;
    public static $row;

    function __construct()
    {
        try {
            return static::$conn = new \PDO('mysql:host=localhost;dbname=phpapp01', 'loger', 'loger');
        }catch(PDOException $e) {
            print 'Exception: '.$e->getMessage().'<br>';
            die();
        }
    }

    public static function query($sql)
    {
        try {
            return static::$query = static::$conn->query($sql);
        }catch(PDOException $e) {
            print 'Exception: '.$e->getMessage().'<br>';
            die();
        }
    }

    public static function row()
    {
        try {
            return static::$row = static::$query->fetch();
        }catch(PDOException $e) {
            print 'Exception: '.$e->getMessage().'<br>';
            die();
        }
    }

    public static function rows()
    {
        try {
            return static::$rows = static::$query->fetchAll();
        }catch(PDOException $e) {
            print 'Exception: '.$e->getMessage().'<br>';
            die();
        }
    }
}