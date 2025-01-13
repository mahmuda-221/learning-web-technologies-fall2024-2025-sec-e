<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    if (!empty($name) && !empty($contact_no) && !empty($username) && !empty($password)) {
        $stmt = $conn->prepare("INSERT INTO authors (name, contact_no, username, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $contact_no, $username, $password);

        if ($stmt->execute()) {
            header("Location: ../html/login.html?message=Registration successful");
        } else {
            header("Location: ../html/register.html?error=Error: " . $stmt->error);
        }
        $stmt->close();
    } else {
        header("Location: ../html/register.html?error=All fields are required");
    }
}
?>

