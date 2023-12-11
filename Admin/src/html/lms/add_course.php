<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quizex";

$conn = new mysqli($servername, $username, $password, $dbname);

$courName = $_POST['courName'];
$category = $_POST['category'];

$sql = "INSERT INTO cours (courName, category, startTime) VALUES ('$courName', '$category', NOW())";


if ($conn->query($sql) === TRUE) {
    $courseId = $conn->insert_id;
    if (
        (isset($_POST['heading']) && is_array($_POST['heading'])) ||
        (isset($_POST['subtitle']) && is_array($_POST['subtitle'])) ||
        (isset($_POST['paragraph']) && is_array($_POST['paragraph']))
    ) {
       
        $numParts = count($_POST['heading']);
        for ($i = 0; $i < $numParts; $i++) {
            $heading = isset($_POST["heading"][$i]) ? htmlspecialchars($_POST["heading"][$i]) : '';
            $subtitle = isset($_POST["subtitle"][$i]) ? htmlspecialchars($_POST["subtitle"][$i]) : '';
            $paragraph = isset($_POST["paragraph"][$i]) ? htmlspecialchars($_POST["paragraph"][$i]) : '';
            $coursDescription = "INSERT INTO cour_description (heading, subtitle, description, cour_id) VALUES ('$heading','$subtitle','$paragraph',$courseId)";
            $conn->query($coursDescription);
        }
        // echo $coursDescription;
        // die();
            header("Location: createcourse.html");
         
    }
}
$conn->close();
?>
