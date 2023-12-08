<?php 
    include 'connection.php';
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
?>