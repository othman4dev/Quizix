<?php

if(isset($_GET['id'])){
    $conn = new mysqli("localhost","root","","quizex");
    $requete = "DELETE FROM cours WHERE courId = " . $_GET['id'] . "";
    $query = mysqli_query($conn,$requete);
    mysqli_close($conn);
    header("location:courses.php");

}
?>