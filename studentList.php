<?php include 'header.php'; ?>

<?php
// SQL query
$sql = "SELECT * FROM student";
// Execute the query
$result = $mysqli->query($sql);
// Check for query execution success
if ($result === false) {
    die("Query failed: " . $mysqli->error);
}

?>

<table id="students">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Contact</th>
    </tr>


    <?php
    // Fetch and display the results
    while ($row = $result->fetch_assoc()) {

    ?>

        <tr>
            <td><?php echo $row["first_name"] . " " . $row["last_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["contact"]; ?></td>
        </tr>



    <?php
    }
    // Close the result and connection
    $result->close();
    $mysqli->close();
    ?>
</table>
</body>

</html>