<?php
require('../../index.php');
use App\Controllers\StudentController as Student;

$student = new Student;

$data = [];
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['phone'] = $_POST['phone'];

if(Student::store($data)) {
    header('Location: '.ROOT_URL.'/views/student/index.php');
    exit();
}else {
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
}