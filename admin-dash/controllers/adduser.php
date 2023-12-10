<?php
include "../inc/connection.php";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];

    // Hash the password
    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO utilisateur (userName, email, password, phoneNumber, dateOfBirth, nationality, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error in SQL query: " . $conn->error);
    }
    $stmt->bind_param("sssssss", $username, $email, $hashedPass, $phone, $date, $nationality, $gender);
    $stmt->execute();

    header("Location: ../students.php");
}
