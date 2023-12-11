<?php
 include "connection.php";
 $courName = $_POST["courName"];
 $category = $_POST["category"];
 $body = $_POST["body"];
 $thisday = date("Y-m-d");
 $sql = "INSERT INTO cours (courName, courDescription, category, startTime) VALUES (?,?,?,?)";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("ssss", $courName, $body , $category , $thisday);
 $stmt->execute();
 header("Location:courses.php");
?>
