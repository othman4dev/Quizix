<?php
// Include connection to database
include '../inc/connection.php';

if (isset($_POST['submit'])) {
    try {
        // Start transaction
        $conn->begin_transaction();

        // Count existing questions
        $sql = "SELECT COUNT(*) FROM questions";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $index_start = $stmt->get_result()->fetch_assoc()['COUNT(*)'];

        // Create new quiz
        $sql = "INSERT INTO quiz (courId, quizName, adminId, creation) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issi', $_POST['cour'], $_POST['quizName'], $_POST['adminId'], date('Y-m-d'));
        $stmt->execute();
        $quizId = $conn->insert_id;

        // Process questions and answers
        foreach ($_POST['question'] as $i => $question) {
            // Validate question data
            if (empty($question)) {
                throw new Exception("Question " . ($i + 1) . " is empty.");
            }

            // Insert question
            $sql = "INSERT INTO questions (questionContent, quizId) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('si', $question, $quizId);
            $stmt->execute();
            $questionId = $conn->insert_id;

            // Process answers
            foreach ($_POST['answer' . ($i + 1)] as $j => $answer) {
                // Validate answer data
                if (empty($answer)) {
                    throw new Exception("Answer " . ($j + 1) . " for question " . ($i + 1) . " is empty.");
                }

                // Check if answer is correct
                $isCorrect = ($_POST['status-' . ($i + 1)][0] == $j) ? 1 : 0;

                // Insert answer
                $sql = "INSERT INTO reponses (reponseContent, reponseStatus, quizId, questionsId) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('siii', $answer, $isCorrect, $quizId, $questionId);
                $stmt->execute();
            }
        }

        // Commit changes
        $conn->commit();

        // Redirect to category page with success message
        header("Location: ../category.php?success=Quiz created successfully.");
    } catch (Exception $e) {
        // Rollback transaction in case of errors
        $conn->rollback();

        // Display error message
        echo "Error: " . $e->getMessage();
    }
}
