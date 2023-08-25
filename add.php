<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "php-crud";

// $conn = new mysqli($servername, $username, $password, $database);

// if($conn->connect_error){
//     die("Connection Failed");
// } 

$sql = "SELECT * FROM studentclass";

?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">

                <option value="" selected disabled>Select Class</option>

                <?php 
                    $result = $conn->query($sql);
                    if($result -> num_rows > 0) : 
                        while($row = $result -> fetch_assoc()) :

                ?>
                <option value="<?php echo $row["cid"]; ?>"><?php echo $row["cname"]; ?></option>
                <?php 
                    endwhile; 
                    endif; 
                ?>

            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
