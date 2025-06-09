<?php
$conn = new mysqli("localhost", "root", "", "campusXchange");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
