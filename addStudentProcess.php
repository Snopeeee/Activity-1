<?php

include 'dbConnect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$sql = "INSERT INTO student (first_name, last_name, email, contact) 
VALUES ('$first_name', '$last_name', '$email', '$contact')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record inserted successfully.";
} else {
    echo "Error: " . $mysqli->error;
}
$mysqli->close();
