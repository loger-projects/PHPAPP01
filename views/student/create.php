<?php require('../../index.php'); ?>
<?php require('../components/header.php') ?>
<div id="header">
    <h1 class="title is-2">Create New Student</h1>
</div>
<div id="body">
    <?php require('../components/sidebar.php'); ?>
    <div id="content">
    <form action="./store.php" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>
                        <div class="field">
                            <div class="control">
                                <input type="text" name="name" class="input">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <div class="field">
                            <div class="control">
                                <input type="email" name="email" class="input">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>
                        <div class="field">
                            <div class="control">
                                <input type="text" name="phone" class="input">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Submit</th>
                    <td>
                        <button type="submit" class="button is-info">Submit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    </div>
</div>
<?php require('../components/footer.php'); ?>
