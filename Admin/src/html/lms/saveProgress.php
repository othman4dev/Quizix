<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quizex";
echo "eyyysddddddddddddd";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "eyyysddddddddddddd";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    // Handle AJAX requests
    if ($_POST['action'] === 'storeProgress') {
        storeProgress();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    // Handle GET requests
    if ($_GET['action'] === 'getScrollPosition') {
        getScrollPosition();
    }
}
echo "eyyysddddddddddddd";
function storeProgress() {
    echo "eyyysddddddddddddd";
    // Assuming you have a table named 'progress' with columns 'userId', 'courseId', and 'scrollPercentage'
    $userId = $_POST['userId'];
    $courseId = $_POST['courseId'];
    $scrollPercentage = $_POST['scrollPercentage'];

    $sql = "INSERT INTO progress (userId, courseId, scrollPercentage, timestamp) VALUES ('$userId', '$courseId', '$scrollPercentage', NOW())";

    global $conn;
    if ($conn->query($sql) === TRUE) {
        echo 'Progress stored successfully.';
        echo "eyyysddddddddddddd";
    } else {
        echo 'Error storing progress: ' . $conn->error;
        echo "eyyysddddddddddddd";
    }
}

function getScrollPosition() {
    // Assuming you have a table named 'progress' with columns 'userId', 'courseId', and 'scrollPercentage'
    $userId = $_GET['userId'];
    $courseId = $_GET['courseId'];
    echo "eyyysddddddddddddd";

    $sql = "SELECT scrollPercentage FROM progress WHERE userId = '$userId' AND courseId = '$courseId' ORDER BY timestamp DESC LIMIT 1";

    global $conn;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $scrollPercentage = $row['scrollPercentage'];
        echo $scrollPercentage;
    } else {
        echo '0'; // Default to top if no scroll position is found
    }
    echo "eyyysddddddddddddd";
}

$conn->close();
?>
