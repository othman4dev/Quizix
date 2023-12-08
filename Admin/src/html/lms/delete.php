<?php 
    include 'connection.php';
    if (isset($_GET['quizId'])) {
        $id = $_GET['quizId'];
        // Disable foreign key checks
        $conn->query("SET FOREIGN_KEY_CHECKS=0;");

        // Delete the quiz row
        $sql = "DELETE FROM quiz WHERE quizId = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // Enable foreign key checks
        $conn->query("SET FOREIGN_KEY_CHECKS=1;");
        header("Location: category.php");
    }
    //Somaya's code
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
    
?>

