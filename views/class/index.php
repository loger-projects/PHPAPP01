<?php require('../../index.php'); ?>
<?php
use App\Controllers\ClassController as MyClass;

$myClass = new MyClass;
$classes = MyClass::index();
?>
<?php require('../components/header.php') ?>
<div id="header">
    <h1 class="title is-2">Class Index</h1>
</div>
<div id="body">
    <?php require('../components/sidebar.php'); ?>
    <div id="content">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($classes as $class): ?>
                <tr>
                    <td><?php echo $class['id']; ?></td>
                    <td>
                        <a href="<?php echo ROOT_URL.'/views/class/show.php?id='.$class['id']; ?>">
                            <?php echo $class['name']; ?>
                        </a>
                    </td>
                    <td><?php echo $class['start_date']; ?></td>
                    <td><?php echo $class['end_date']; ?></td>
                    <td><a href="<?php echo ROOT_URL.'/views/class/edit.php?id='.$class['id']; ?>" class="button is-info">Edit</a></td>
                    <td><button class="button is-danger">Delete</button></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require('../components/footer.php'); ?>
