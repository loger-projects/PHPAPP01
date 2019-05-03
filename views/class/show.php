<?php require('../../index.php'); ?>
<?php
use App\Controllers\ClassController as MyClass;

$general = new MyClass;
$id = $_GET['id'];
if(!isset($id)):
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
else:
    $class = MyClass::registedStudents($id);
    $students = $class['students'];
endif;
?>
<?php require('../components/header.php') ?>
<div id="header">
    <h1 class="title is-2">Class Info: <?php echo $class['name']; ?></h1>
</div>
<div id="body">
    <?php require('../components/sidebar.php'); ?>
    <div id="content">
        <table class="table">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Value</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td><?php echo $class['id']; ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $class['name']; ?></td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td><?php echo $class['start_date'] ?></td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td><?php echo $class['end_date'] ?></td>
                </tr>
                <tr>
                    <th>Registed Students</th>
                    <td>
                        <ul>
                        <?php foreach($students as $student): ?>
                            <li>
                                <a href="<?php echo ROOT_URL.'/views/student/show.php?id='.$student['id']; ?>">
                                    <?php echo $student['name']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php require('../components/footer.php'); ?>
