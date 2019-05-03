<?php
namespace App\Controllers;

use App\Controllers\PDOController;

class ClassController extends PDOController {
    
    /**
     * Undocumented function
     *
     * @return void
     */
    public static function index()
    {
        return static::query("SELECT * FROM classes")->fetchAll();
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public static function show($id)
    {
        return static::query("SELECT * FROM classes WHERE id = '$id'")->fetch();
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
        $start_date = $data['start_date'];
        $end_date = $data['end_date'];

        return static::query("INSERT INTO classes(name, start_date, end_date) VALUES('$name', '$start_date', '$end_date')");
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function destroy($id)
    {
        return static::query("DELETE FROM classes WHERE id = '$id'");
    }

    public static function update($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $startDate = $data['start_date'];
        $endDate = $data['end_date'];

        return static::query("UPDATE classes SET name = '$name', start_date = '$startDate', end_date = '$endDate' WHERE id = '$id' ") ? true : false;
    }

    public function registedStudents($id)
    {
        $class = static::show($id);
        $sql = "
        SELECT s.id
            , s.name
            , s.email
            , s.phone
        FROM classes c
        INNER JOIN registers r
            on c.id = r.class_id
        INNER JOIN students s
            on s.id = r.student_id
        WHERE
            c.id = '$id'
        ";
        
        $class['students'] = static::query($sql)->fetchAll();

        return $class;
    }
}