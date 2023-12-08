<?php 
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $checksql = "SELECT COUNT(questionsId) FROM questions";
        $checkstmt = $conn->prepare($checksql);
        $checkstmt->execute();
        $index_start = $checkstmt->get_result()->fetch_assoc()['COUNT(questionsId)'];
        echo $index_start;
        $checksql2 = "SELECT COUNT(quizId) FROM quiz";
        $checkstmt2 = $conn->prepare($checksql2);
        $checkstmt2->execute();
        $index_start2 = $checkstmt2->get_result()->fetch_assoc()['COUNT(quizId)'];
        $questions = array(
            $_POST['question1'],
            $_POST['question2'],
            $_POST['question3'],
            $_POST['question4'],
            $_POST['question5'],
            $_POST['question6'],
            $_POST['question7'],
            $_POST['question8'],
            $_POST['question9'],
            $_POST['question10']
        );
        $answers1 = array(
            $_POST['answer1-1'],
            $_POST['answer1-2'],
            $_POST['answer1-3'],
            $_POST['answer1-4']
        );
        $answers2 = array(
            $_POST['answer2-1'],
            $_POST['answer2-2'],
            $_POST['answer2-3'],
            $_POST['answer2-4']
        );
        $answers3 = array(
            $_POST['answer3-1'],
            $_POST['answer3-2'],
            $_POST['answer3-3'],
            $_POST['answer3-4']
        );
        $answers4 = array(
            $_POST['answer4-1'],
            $_POST['answer4-2'],
            $_POST['answer4-3'],
            $_POST['answer4-4']
        );
        $answers5 = array(
            $_POST['answer5-1'],
            $_POST['answer5-2'],
            $_POST['answer5-3'],
            $_POST['answer5-4']
        );
        $answers6 = array(
            $_POST['answer6-1'],
            $_POST['answer6-2'],
            $_POST['answer6-3'],
            $_POST['answer6-4']
        );
        $answers7 = array(
            $_POST['answer7-1'],
            $_POST['answer7-2'],
            $_POST['answer7-3'],
            $_POST['answer7-4']
        );
        $answers8 = array(
            $_POST['answer8-1'],
            $_POST['answer8-2'],
            $_POST['answer8-3'],
            $_POST['answer8-4']
        );
        $answers9 = array(
            $_POST['answer9-1'],
            $_POST['answer9-2'],
            $_POST['answer9-3'],
            $_POST['answer9-4']
        );
        $answers10 = array(
            $_POST['answer10-1'],
            $_POST['answer10-2'],
            $_POST['answer10-3'],
            $_POST['answer10-4']
        );
        $allAnswers = array($answers1, $answers2, $answers3, $answers4, $answers5, $answers6, $answers7, $answers8, $answers9, $answers10);
        foreach ($questions as $key => $value) {
            $sql = "INSERT INTO questions (questionContent, quizId) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $value, $index_start2);
            if ($stmt->execute()) {
                echo "Question inserted successfully";
            } else {
                echo "Error inserting question: " . $stmt->error;
            }
        }   
        for ($i=1; $i <= 10; $i++) { 
            for ($j = 1 ; $j <= 4 ; $j++) {
                $thisql = "INSERT INTO reponses (reponseContent, reponseStatus , quizId , questionsId ) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($thisql);
                $index = $index_start + $i;
                $status = $_POST["status-".$i];
                if ($status[0] == $j) {
                    $true = true;
                    $stmt->bind_param("ssii", $allAnswers[$i-1][$j-1], $true , $index_start2, $index);
                    if ($stmt->execute()) {
                        echo "Answer inserted successfully";
                    } else {
                        echo "Error inserting question: " . $stmt->error;
                    }
                } else {
                    $false = false;
                    $stmt->bind_param("ssii", $allAnswers[$i-1][$j-1], $false , $index_start2, $index);
                    if ($stmt->execute()) {
                        echo "Answer inserted successfully";
                    } else {
                        echo "Error inserting question: " . $stmt->error;
                    }
                }
            }
        }
        header("Location: AddCourseDetails.php");
    }
?>
