<?php

$stu_id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "php-crud";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection Failed");
} 

$sql = "DELETE FROM student WHERE {$stu_id} = sid";

$result = $conn->query($sql);

header("Location: http://localhost/php/php-crud/index.php");
exit();


$conn->close();