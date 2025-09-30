<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dicUsers = [
        "valeri" => "hola",
        "jose" => "adios"
    ];

    $msg = "";
    $type = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if (isset($dicUsers[$username]) && $dicUsers[$username] === $password) {
            $msg = "Login successful.";
            $type = "exito";
        } else {
            $msg = "Invalid username or password.";
            $type = "error";
        }

        // Redirigir ANTES de enviar HTML
        header("Location: FormLogin.php?msg=" . urlencode($msg) . "&type=" . $type);
        exit;
    }
    ?>    
</body>
</html>
