<?php
session_start();
include 'dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Always set the session to logged in
    $_SESSION['loggedin'] = true; 

    // Redirect to index.php with a JavaScript alert
    echo "<script>
            alert('Successfully logged in!');
            window.location.href = 'index.php';
          </script>";
    exit(); // Ensure no further code is executed after redirection
}

// Close the database connection
$mysqli->close();
?>
