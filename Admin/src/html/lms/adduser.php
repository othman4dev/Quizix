<?php
include "connection.php";
// $connection = new mysqli($servername, $username, $password, $database);

// isset il fait la véréfication en php
if (isset($_POST['submit'])) {
    $UserName = $_POST["username"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phone"];
    $dateOfBirth = $_POST["date"];
    $date = DateTime::createFromFormat('d/m/Y', $dateOfBirth);
    $formattedDate = $date->format('Y-m-d');

    $password = $_POST["password"];
    $nationality = $_POST["nationality"];
    $gender = $_POST["gender"];

    // Hash the password
    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateur (userName, email, password_user ,phoneNumber, dateOfBirth ,nationality, gender) VALUES ('$UserName','$email','$hashedPass','$phoneNumber','$formattedDate','$nationality','$gender');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data inserted";
    } else {
        echo "Data not inserted";
    }
    header("Location: students.php");
}      
?>

