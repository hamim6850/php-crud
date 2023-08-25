<?php include 'header.php'; ?>

<?php

if(isset($_POST['deletebtn'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "php-crud";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection Failed");
    } 

    $stu_id = $_POST['sid'];

    $sql = "DELETE FROM student WHERE sid = '$stu_id'";

    // Execute the SQL statement
    if ($conn->query($sql)) {

        header("Location: http://localhost/php/php-crud/index.php");
        exit();
    }
}

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>