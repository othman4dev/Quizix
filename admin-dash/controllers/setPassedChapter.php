<?php
// Include connection to database
include '../inc/connection.php';

if (isset($_GET['id'])) {
    $sql = "UPDATE cour_chapters SET passed=1 WHERE id=".$_GET['id'].";";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}