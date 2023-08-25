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

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE sid = $stu_id";

?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php 
        $result = $conn->query($sql);
        if($result -> num_rows > 0) : 
            while($row = $result -> fetch_assoc()) :

    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid" value="<?php echo $row["sid"];?>" />
            <input type="text" name="sname" value="<?php echo $row["sname"];?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row["saddress"];?>" />
        </div>
        <div class="form-group">
            <label>Class</label>

            <?php 
            $sql2 = "SELECT * FROM studentclass";
            $result2 = $conn->query($sql2);
            if($result2 -> num_rows > 0) : 
            ?>
            <select name="sclass">
                <option value="" selected disabled>Select Class</option>
                <?php while($row2 = $result2 -> fetch_assoc()) : 
                    if($row['sclass'] == $row2['cid']){
                        $select = 'selected';
                    } else {
                        $select = '';
                    }
                    echo "<option {$select} value='{$row2['cid']}'>{$row2['cname']}</option>";
                
                endwhile; ?>
            </select>
            <?php
            endif;
            ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row["sphone"];?>" />
        </div>
        <input class="submit" type="submit" value="Update" />
    </form>
    <?php 
        endwhile; 
        endif; 
    ?>
</div>
</div>
</body>

</html>