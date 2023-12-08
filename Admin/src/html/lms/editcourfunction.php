<?php 
    include "connection.php";
    $id = $_GET['id'];
    $sql = "UPDATE cours set courDescription= WHERE courId = '$id'";

?>