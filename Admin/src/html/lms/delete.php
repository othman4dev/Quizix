<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quizex";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_GET["id"])) {
    $userID = $_GET["id"];
    
    // Delete the user from the database
    $deleteQuery = "DELETE FROM utilisateur WHERE userId=$userID";
     $result=mysqli_query($connection,$deleteQuery);
    
    if ($result) {
    // Rediriger vers la page students.php après l'action
        header("Location:students.php");
    } else {
        echo "<div class='alert alert-danger'>Error deleting user: " . $connection->error . "</div>";
    }
} else {
    echo "<div class='alert alert-danger'>User ID not provided.</div>";
}

// Close the database connection
$connection->close();
?>
