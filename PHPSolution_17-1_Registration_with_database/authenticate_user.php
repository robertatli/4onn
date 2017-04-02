<?php
require_once 'connection.php';

$sql = "SELECT userPassword FROM Users WHERE userEmail = ?";
// prepare statement
$stmt = $conn->prepare($sql);
// pass the input parameter as a single-element array
$stmt->execute(array($_POST['email']));
$storedPwd = $stmt->fetchColumn();
echo $storedPwd;
// check the submitted password against the stored version
if (password_verify($password, $storedPwd)) {
    $_SESSION['authenticated'] = 'Jethro Tull';
    // get the time the session started
    $_SESSION['start'] = time();
    session_regenerate_id();
    header("Location: $redirect"); exit;
} else {
    // if not verified, prepare error message
    $error = 'Invalid email or password';
}
