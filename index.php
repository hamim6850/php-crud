<?php
include 'header.php';
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php-crud";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection Failed");
} 

$sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";

?>

<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

            <?php 
                $result = $conn->query($sql);
                if($result -> num_rows > 0) : 
                    while($row = $result -> fetch_assoc()) :

            ?>
            <tr>
                <td><?php echo $row["sid"];?></td>
                <td><?php echo $row["sname"];?></td>
                <td><?php echo $row["saddress"];?></td>
                <td><?php echo $row["cname"];?></td>
                <td><?php echo $row["sphone"];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row["sid"];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row["sid"];?>'>Delete</a>
                </td>
            </tr>
            <?php 
                endwhile; 
                endif; 
            ?>

        </tbody>
    </table>
</div>
</div>
</body>
</html>
