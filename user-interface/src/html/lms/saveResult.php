<?php
    include 'connection.php';
    session_start();
    if (isset($_POST['result'])) {
        $result = $_POST['result'];
        $quizId = $_POST['quizId'];
        $userId = $_SESSION['userId'];
        $sql = "INSERT INTO results (quizResult , quizId , userId) VALUES ($result, $quizId, $userId)";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
?>