<?php include 'config.php'; ?>
<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "php-crud";

// $conn = new mysqli($servername, $username, $password, $database);

// if($conn->connect_error){
//     die("Connection Failed");
// } 

$sql = "INSERT INTO student (sname, saddress, sclass, sphone) VALUES ('$stu_name', '$stu_address', '$stu_class', $stu_phone)";

$result = $conn->query($sql);

header("Location: {$hostName}/php/php-crud/index.php");
exit();


$conn->close();