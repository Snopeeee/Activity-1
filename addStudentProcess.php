<?php
include 'dbConnect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$sql = "INSERT INTO student (first_name, last_name, email, contact) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $first_name, $last_name, $email, $contact);

if ($stmt->execute()) {
    // Success message
    echo "<div class='container'>
            <h1>Success</h1>
            <p>New record inserted successfully.</p>
            <a href='studentList.php' class='button'>View Student List</a>
          </div>";
} else {
    // Error message
    echo "<div class='container'>
            <h1>Error</h1>
            <p>Error: " . $stmt->error . "</p>
            <a href='addStudent.php' class='button'>Try Again</a>
          </div>";
}

$stmt->close();
$mysqli->close();
?>
