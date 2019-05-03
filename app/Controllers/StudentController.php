<?php

namespace App\Controllers;

use App\Controllers\PDOController;

class StudentController extends PDOController {
    
    /**
     * Undocumented function
     *
     * @return void
     */
    public static function index()
    {
        return static::query("SELECT * FROM students")->fetchAll();
    }
    
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public static function show($id)
    {
        return static::query("SELECT * FROM students WHERE id = '$id'")->fetch();
    }
    
    /**
     * Undocumented function
     *
     * @param [type] $data
     * @return void
     */
    public static function store($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];

        return static::query("INSERT INTO students(name, email, phone) VALUE('$name', '$email', '$phone')");
    }

    public static function update($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];

        return static::query("UPDATE students SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id'") ? true : false;
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public static function destroy($id)
    {
        return static::query("DELETE FROM students WHERE id = '$id'") ? true : false;
    }

    public static function registedClasses($id)
    {
        $student = static::show($id);

        $sql = "
            SELECT c.name
                , c.start_date
                , c.end_date
            FROM students s
            INNER JOIN registers r
                on s.id = r.student_id
            INNER JOIN classes c
                on c.id = r.class_id
            WHERE
                s.id = '$id'
        ";

        $student['classes'] = static::query($sql)->fetchAll();
        
        return $student;
    }

}