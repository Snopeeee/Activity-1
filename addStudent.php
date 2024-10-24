<?php include 'header.php'; ?>

<div class="container add-student-container">
    <h1>Add Student</h1>
    <form action="addStudentProcess.php" method="POST">
        <div class="input-group">
            <label for="fname">First Name</label>
            <input type="text" name="first_name" id="fname" placeholder="Enter your first name" required>
        </div>

        <div class="input-group">
            <label for="lname">Last Name</label>
            <input type="text" name="last_name" id="lname" placeholder="Enter your last name" required>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
        </div>

        <div class="input-group">
            <label for="contact">Contact</label>
            <input type="text" name="contact" id="contact" placeholder="Enter your contact" required>
        </div>

        <input type="submit" value="Submit" class="button">
    </form>
</div>

</body>
</html>
