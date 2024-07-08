<?php
$conn = new mysqli("localhost", "root", "root", "robot_control5");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['direction'])) {
    $direction = $conn->real_escape_string($_POST['direction']);
        $sql = "INSERT INTO robot_movements (direction) VALUES ('$direction')";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
}

$conn->close();
?>
