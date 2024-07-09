<?php
$host = 'localhost';
$db = 'robot_control';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$command = $data['command'];
$time = date('Y-m-d H:i:s');

$sql = "INSERT INTO commands (command, time) VALUES ('$command', '$time')";
if ($conn->query($sql) === TRUE) {
    echo "Command recorded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
