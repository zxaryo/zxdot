<?php

$servername = "localhost";
$username = "u595707791_zxdot";
$password = "u595707791_zxdot";
$dbname = "u595707791_zxdot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE zxdot SET value=".$_GET['value']." WHERE 'sender'=".$_GET['sender']."";

//echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>