<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
    if(isset($_POST['showbtn'])):
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $database = "php-crud";

        // $conn = new mysqli($servername, $username, $password, $database);

        // if($conn->connect_error){
        //     die("Connection Failed");
        // } 

        $stu_id = $_POST['sid'];

        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        $result = $conn->query($sql);
        if($result -> num_rows > 0) : 
        while($row = $result -> fetch_assoc()) :
    ?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row["sid"];?>" />
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
        if($result2->num_rows > 0) :
        ?>
        <select name="sclass">
            <option value="" selected disabled>Select Class</option>

            <?php
            while($row2 = $result2 -> fetch_assoc()) :

                $select = $row['sclass'] == $row2['cid'] ? 'selected' : NULL;

            ?>
            <option value="<?php echo $row2['cid'];?>" <?php echo $select;?>><?php echo $row2['cname'];?></option>
            <?php endwhile; ?>
        </select>
        <?php endif; ?>
        
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row["sphone"];?>" />
        </div>
        <input class="submit" type="submit" value="Update"  />
    </form>
    <?php     
    endwhile;
    endif;
    endif;
    ?>
</div>
</div>
</body>
</html>
