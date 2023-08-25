<?php include 'config.php'; ?>
<?php

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "php-crud";

// $conn = new mysqli($servername, $username, $password, $database);

// if($conn->connect_error){
//     die("Connection Failed");
// } 

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";

$result = $conn->query($sql);

header("Location: {$hostName}/php/php-crud/index.php");
exit();


$conn->close();