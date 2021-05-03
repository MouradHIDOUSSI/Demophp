<?php include "functions.php"; ?>
<?php
    if (isset($_POST['submit'])) {
        createData();
    }
?>
<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" name='username' class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name='password' class="form-control">
            </div>
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
        </form>
    </div>
</div>
<?php include "includes/footer.php"; ?>

