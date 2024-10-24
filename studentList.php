<?php include 'header.php'; ?>

<div class="container student-list-container wide-list-container">
    <h1>Student List</h1>

    <?php
    include 'dbConnect.php';
    $sql = "SELECT * FROM student";
    $result = $mysqli->query($sql);
    if ($result === false) {
        die("<div class='error-message'>Query failed: " . $mysqli->error . "</div>");
    }
    ?>

    <table id="students">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row["first_name"] . " " . $row["last_name"]) . "</td>
                            <td>" . htmlspecialchars($row["email"]) . "</td>
                            <td>" . htmlspecialchars($row["contact"]) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No students found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
