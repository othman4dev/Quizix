<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quizex";

// Create connection entre php et la base de données en utilison la fonction mysqli_connect
$connection = mysqli_connect($servername, $username, $password, $database);
// $connection = new mysqli($servername, $username, $password, $database);

// isset il fait la véréfication en php
if (isset($_POST['submit'])) {
    $UserName = $_POST["username"];
    $email = $_POST["email"];
    $phoneNumber= $_POST["phone"];
    $dateOfBirth= $_POST["date"];
    $nationality= $_POST["nationality"];
    $role= $_POST["role"];

    do {
        if (empty($UserName) || empty($email) || empty($phoneNumber) || empty($dateOfBirth) || empty($nationality) || empty($role)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // add new user to database
        $sql = "INSERT INTO utilisateur(userName, email,phoneNumber, dateOfBirth ,nationality,role_user) VALUES ('$UserName','$email','$phoneNumber','$dateOfBirth','$nationality','$role')";
        // lire les requetes sql en utilisant mysqli_query
        $result = mysqli_query($connection, $sql);
        // $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query:" . $connection->error;
            break;
        }

        $successMessage = "User added correctly";
        header("location: students.php");
    } while (false);
}
?>


    <!-- <?php
    if(!empty($errorMessage)){
        echo"
      <div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>$errorMessage</strong>
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>
      ";
    }
    ?>
   
     <?php
     if(!empty($successMessage)){
        echo"
        <div class='row mb-3'>
        <div class='offset-sm-3 col-sm-6'>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>$successMessage</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        </div>
        </div>
        ";
     }
     ?> -->


