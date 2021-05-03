 <?php include "db.php"; ?>

 <?php

    function createData()
    {
        global $connection;
        //echo "you got it";
        $username = $_POST['username'];
        //thisto prevent sql injection
        //it means 
        /*
        SQL injection is a code injection technique that might destroy your database.

        SQL injection is one of the most common web hacking techniques.

        SQL injection is the placement of malicious code in SQL statements, via web page input.
        */
        $username = mysqli_real_escape_string($connection, $username);
        $password = $_POST['password'];
        $password = mysqli_real_escape_string($connection, $password);
        //here we gonna encrypt password
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystringsforsalt";
        $hashFormatPassword = $hashFormat . $salt;
        $password = crypt($password, $hashFormatPassword);
        $query = "insert into users(username,password)";
        //in order for the query to be diplayed totlay we gonna split it
        //.= means concatenate both statements
        $query .= "Values ('$username', '$password')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Faild" . mysqli_error($connection));
        } else {
            echo "Record created";
        }
    }

    function showAllId()
    {
        global $connection;
        $query = "select * from users";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
        if (!$result) {
            die("Query Faild" . mysqli_error($connection));
        } else {
            echo "All id's are displayed";
        }
    }

    function showAllData()
    {
        global $connection;
        $query = "select * from users";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>";
            print_r($row);
            echo "<br>";
        }
    }

    function updateData()
    {
        global $connection;
        //We can use this: or
        global $username;
        global $password;
        global $id;
        //we can use this:
        /*$username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];*/
        $query = "update users set";
        $query .= " username = '$username',";
        $query .= " password = '$password'";
        $query .= " where id = '$id'";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query Faild" . mysqli_error($connection));
        } else {
            echo "Record updated";
        }
    }

    function deleteData()
    {
        global $connection;
        //We can use this: or
        global $username;
        global $password;
        global $id;
        //we can use this:
        /*$username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];*/
        $query = "delete from users ";
        $query .= " where id = '$id'";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query Faild" . mysqli_error($connection));
        } else {
            echo "Record deleted";
        }
    }
    ?>
