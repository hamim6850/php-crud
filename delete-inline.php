<?php include 'config.php'; ?>
<?php

$stu_id = $_GET['id'];

$sql = "DELETE FROM student WHERE {$stu_id} = sid";

$result = $conn->query($sql);

header("Location: {$hostName}/php/php-crud/index.php");
exit();


$conn->close();