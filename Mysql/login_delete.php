<?php include "functions.php"; ?>

<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        deleteData();
    }
?>
<?php include "includes/header.php"; ?>
<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" name='username' class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name='password' class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="id"> Select ID</label>
                <select name="id" id="">
                    <?php
                    showAllId();
                    ?>
                </select>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    </div>
</div>
<?php include "includes/footer.php"; ?>