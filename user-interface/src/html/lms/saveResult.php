<?php
    include 'connection.php';
    session_start();
    if (isset($_POST['result'])) {
        $result = $_POST['result'];
        $quizId = $_POST['quizId'];
        if (!isset($_SESSION['userId'])) {
            $_SESSION['userId'] = 1;
        }
        $userId = $_SESSION['userId'];
        $sql = "INSERT INTO resultat (quizResult , quizId , userId) VALUES ($result, $quizId, $userId)";
        $sql2 = "INSERT INTO passedquiz (quizresult, quizId, userId) VALUES ($result, $quizId, $userId)";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt2 = $conn->prepare($sql2);
        $stmt2->execute();
    }
    header("Location: passquiz.php?quizId=".$quizId."&&result=".$result);
?>