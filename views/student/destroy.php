<?php
require('../../index.php');

use App\Controllers\StudentController as Student;

$student = new Student;

$id = $_POST['id'];

if(Student::destroy($id)) {
    header('Location: '.ROOT_URL.'/views/student/index.php');
    exit();
}else {
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
}