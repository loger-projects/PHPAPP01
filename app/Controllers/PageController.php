<?php
namespace App\Controllers;

class PageController {
    public function getPage()
    {
        return 'Voluptatum possimus alias et.';
    }

    public function sayHello()
    {
        return 'Hello World';
    }

    public static function show()
    {
        return 'Show Me Your Time';
    }
}