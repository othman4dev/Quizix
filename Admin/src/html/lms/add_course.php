<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quizex";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$courseName = $_POST['courseName'];
$category = $_POST['category'];

// Insert course information into the database
$sql = "INSERT INTO cours (courName, category) VALUES ('$courseName', '$category')";

if ($conn->query($sql) === TRUE) {
    $courseId = $conn->insert_id;

    // Determine the number of parts based on the length of the heading array
    $numParts = count($_POST['heading']);

    // Insert parts information into the database
    echo "test1";
    for ($i = 0; $i < $numParts; $i++) {
        echo "test2";
        $heading = $_POST["heading"];
        $subtitle = $_POST["subtitle"];
        $paragraph = $_POST["paragraph"];
        $body = $heading.$subtitle.$paragraph;
        // Insert part information into the database
        $sql = "INSERT INTO cours (coursDescription) 
        VALUES ('$body')";
 

        $conn->query($sql);
    }

    echo "Course added successfully";
    echo "test1";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
