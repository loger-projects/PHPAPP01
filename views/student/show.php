<?php require('../../index.php'); ?>
<?php
use App\Controllers\StudentController as Student;

$general = new Student;
$id = $_GET['id'];
if(!isset($id)):
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
else:
    $student = Student::registedClasses($id);
    $classes = $student['classes'];
endif;
?>
<?php require('../components/header.php') ?>
<div id="header">
    <h1 class="title is-2">Student Info: <?php echo $student['name']; ?></h1>
</div>
<div id="body">
    <?php require('../components/sidebar.php'); ?>
    <div id="content">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td><?php echo $student['id']; ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $student['name']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $student['email']; ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $student['phone']; ?></td>
                </tr>
                <tr>
                    <th>Registed Classes</th>
                    <td>
                        <ul>
                        <?php foreach($classes as $class): ?>
                            <li>
                                <a href="<?php echo ROOT_URL.'/views/class/show.php?id='.$class['id']; ?>">
                                    <?php echo $class['name']; ?>
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
