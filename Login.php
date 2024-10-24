<?php include 'header.php'; ?>

<div class="container login-container">
    <h1>Login</h1>
    <form action="loginProcess.php" method="post" class="login-form">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
        </div>

        <input type="submit" value="Login" class="button">
    </form>
</div>

</body>
</html>
