<?php require('../../index.php'); ?>
<?php
use App\Controllers\ClassController as MyClass;

$generate = new MyClass;
if(! $class = MyClass::show($_GET['id'])) {
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
}
?>
<?php require('../components/header.php') ?>
<div id="header">
    <h1 class="title is-2">Edit Class: <?php echo $class['name']; ?></h1>
</div>
<div id="body">
    <?php require('../components/sidebar.php'); ?>
    <div id="content">
        <form action="./update.php" method="post">
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
                    <td>
                    <div class="field">
                        <div class="control"><input type="text" name="id" readonly class="input" value="<?php echo $class['id'] ?>"></div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>
                    <div class="field">
                        <div class="control"><input type="text" name="name" value="<?php echo $class['name']; ?>" class="input"></div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td>
                    <div class="field">
                        <div class="control"><input type="date" name="start_date" value="<?php echo $class['start_date']; ?>" class="input"></div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td>
                    <div class="field">
                        <div class="control"><input type="date" name="end_date" value="<?php echo $class['end_date']; ?>" class="input"></div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <th>Update</th>
                    <td class="has-text-centered">
                        <button type="submit" class="button is-info">Save</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
</div>
<?php require('../components/footer.php'); ?>
