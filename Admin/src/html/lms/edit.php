<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Edit User</h2>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "quizex";

        $connection = new mysqli($servername, $username, $password, $database);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the form data
            $userID = $_POST["UserID"];
            $newUserName = $_POST["newUserName"];
            $newEmail = $_POST["newEmail"];
            $newphoneNumber = $_POST["newphoneNumber"];
            $newdateOfBirth = $_POST["newdateOfBirth"];
            $newnationality = $_POST["newnationality"];
            $newrole= $_POST["newrole"];
            // Update the user information in the database
            $updateQuery = "UPDATE utilisateur SET username='$newUserName', email='$newEmail', phoneNumber='$newphoneNumber',dateOfBirth='$newdateOfBirth',nationality='$newnationality',role_user='$newrole' WHERE userId=$userID";

            if ($connection->query($updateQuery) === TRUE) {
                echo "<div class='alert alert-success'>User information updated successfully.</div>";
            } else {
                echo "<div class='alert alert-danger'>Error updating user information: " . $connection->error . "</div>";
            }
        }

        // Retrieve the user information for editing
        if (isset($_GET["id"])) {
            $userID = $_GET["id"];
            $selectQuery = "SELECT * FROM utilisateur WHERE userId = $userID";
            $result = $connection->query($selectQuery);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
    <form method="post">
    <input type="hidden" name="UserID" value="<?php echo $row["userId"]; ?>">

    <div class="mb-3">
        <label for="newUserName" class="form-label">New UserName</label>
        <input type="text" class="form-control" name="newUserName" value="<?php echo $row["userName"]; ?>">
    </div>

    <div class="mb-3">
        <label for="newEmail" class="form-label">New Email</label>
        <input type="text" class="form-control" name="newEmail" value="<?php echo $row["email"]; ?>">
    </div>
    <div class="mb-3">
        <label for="newdateOfBirth" class="form-label">Date of birth</label>
        <input type="text" class="form-control" name="newdateOfBirth" value="<?php echo $row["dateOfBirth"]; ?>">
    </div>
    <div class="mb-3">
        <label for="newphoneNumber" class="form-label">New phoneNumber</label>
        <input type="text" class="form-control" name="newphoneNumber" value="<?php echo $row["phoneNumber"]; ?>">
    </div>
    <div class="mb-3">
        <label for="nationality" class="form-label">New Nationality</label>
        <input type="text" class="form-control" name="newnationality" value="<?php echo $row["nationality"]; ?>">
    </div>
    <div class="mb-3">
        <label for="newrole" class="form-label">Role User</label>
        <input type="text" class="form-control" name="newrole" value="<?php echo $row["role_user"]; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
    

    <!-- Bouton de retour à la première page (create.php) -->
    <a class='btn btn-secondary' href='students.php'>Back</a>
</form>

                <?php
                       } 
            else {
                echo "<div class='alert alert-danger'>User not found.</div>";
            }
        }

         // Close the database connection
         $connection->close();
         ?>
 
     </div>
 </body>
 </html>
 
