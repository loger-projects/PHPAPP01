<?php require('../../index.php'); ?>
<?php
use App\Controllers\StudentController as Student;

$general = new Student;
$id = $_GET['id'];
if(!isset($id)):
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
else:
    $student = Student::show($id);
endif;
?>
<?php require('../components/header.php') ?>
<div id="header">
    <h1 class="title is-2">Edit Student Info: <?php echo $student['name']; ?></h1>
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
                        <div class="control">
                        <input 
                            type="text"
                            name="id"
                            value="<?php echo $student['id']; ?>"
                            class="input"
                            required
                            readonly>
                        </div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>
                        <div class="field">
                            <div class="control">
                                <input 
                                    type="text" 
                                    name="name"
                                    value="<?php echo $student['name']; ?>"
                                    class="input"
                                    required>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <div class="field">
                            <div class="control">
                                <input 
                                    type="email" 
                                    name="email" 
                                    value="<?php echo $student['email']; ?>"
                                    class="input"
                                    required>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>
                        <div class="field">
                            <div class="control">
                                <input 
                                    type="text" 
                                    name="phone" 
                                    value="<?php echo $student['phone']; ?>"
                                    class="input"
                                    required>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Save</th>
                    <td class="has-text-centered">
                        <button type="submit" class="button is-info">Update</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    </div>
</div>
<?php require('../components/footer.php'); ?>
