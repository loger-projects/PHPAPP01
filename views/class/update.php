<?php require('../../index.php') ?>
<?php
use App\Controllers\ClassController as MyClass;

$class = new MyClass;

$data = [];
$data['id'] = $_POST['id'];
$data['name'] = $_POST['name'];
$data['start_date'] = $_POST['start_date'];
$data['end_date'] = $_POST['end_date'];

if(MyClass::update($data)) {
    header('Location: '.ROOT_URL.'/views/class/index.php');
    exit();
}else {
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
}