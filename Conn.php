<?php
$conn = new mysqli("localhost","root","","CampusXchange");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>
