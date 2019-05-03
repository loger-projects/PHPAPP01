<?php require('../../index.php'); ?>
<?php
use App\Controllers\StudentController as Student;

$student = new Student;
$students = Student::index();
?>
<?php require('../components/header.php') ?>
<div id="header">
    <h1 class="title is-2">Student Index</h1>
</div>
<div id="body">
    <?php require('../components/sidebar.php'); ?>
    <div id="content">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($students as $student): ?>
                <tr>
                    <td><?php echo $student['id']; ?></td>
                    <td>
                        <a href="<?php echo ROOT_URL.'/views/student/show.php?id='.$student['id']; ?>">
                            <?php echo $student['name']; ?>
                        </a>
                    </td>
                    <td><?php echo $student['email']; ?></td>
                    <td><?php echo $student['phone']; ?></td>
                    <td><a href="<?php echo ROOT_URL.'/views/student/edit.php?id='.$student['id']; ?>" class="button is-info">Edit</a></td>
                    <td>
                    <form action="./destroy.php" method="post">
                        <input type="text" name="id" value="<?php echo $student['id']; ?>" readonly hidden>
                        <button type="submit" class="button is-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require('../components/footer.php'); ?>
