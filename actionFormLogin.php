<?php
$dicUsers = [
    "valeri" => "hola",
    "jose" => "adios"
];

$msg = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($dicUsers[$username]) && $dicUsers[$username] === $password) {
        $msg = "Login successful.";
        $type = "exito";
    } else {
        $msg = "Invalid username or password.";
    }

    header("Location: FormLogin.php?msg=" . urlencode($msg) . "&type=" . $type);
    exit;
}
