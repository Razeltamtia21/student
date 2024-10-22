<?php 

include 'config.php';

$name = $_POST["name"];
$class = $_POST["class"];
$department	= $_POST["department"];

$query = "SELECT * FROM latihan3 WHERE name = ?";
$stmt = $connect->prepare($query);
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    echo "Name already exits!";
}else {
    $insertQuery = "INSERT INTO latihan3 (name, class, department) VALUES (?, ?, ?)";
    $insertStmt = $connect->prepare($insertQuery);
    $insertStmt->bind_param("sss", $name, $class, $department);
    $insertStmt->execute();

    echo "student successfully added";
}

?>