<?php include 'header.php'; ?>

<div class="container">
    <h1>Employee Information</h1>
    <?php include 'Employee.php'; ?>
    
    <?php
    $employee1 = new Employee();
    $employee1->firstName = "John";
    $employee1->lastName = "Doe";
    $employee1->salary = 50000;

    echo "<div class='employee-info'>";
    echo "<p><strong>Employee Name:</strong> " . $employee1->getFullName() . "</p>";
    echo "<p><strong>Salary:</strong> $" . number_format($employee1->getSalary(), 2) . "</p>";
    echo "</div>";
    ?>
</div>

</body>
</html>
