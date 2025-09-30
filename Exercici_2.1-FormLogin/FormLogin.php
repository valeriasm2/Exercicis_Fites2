<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Login Form</h1>
    <form action="actionFormLogin.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>

    <?php
    if (isset($_GET['msg']) && isset($_GET['type'])) {
        $tipo = ($_GET['type'] === 'exito') ? 'exito' : 'error';
        echo "<p class='mensaje $tipo'>" . htmlspecialchars($_GET['msg']) . "</p>";
    }
    ?>

    <footer>
        <p>&copy; Valeria Santana</p>
    </footer>

</body>
</html>
