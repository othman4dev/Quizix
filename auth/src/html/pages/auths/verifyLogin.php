<?php
    session_start();
    include "connection.php" ;
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $email = $_POST['username'];
        $password = $_POST['password'];
    
        // Hash the password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "SELECT * FROM utilisateur WHERE email='$email'";
        $query2 = "SELECT * FROM administrateur WHERE email='$email'"; 
        $result = mysqli_query($conn, $query);
        $result2 = mysqli_query($conn, $query2);
    
        if ($result && $row = mysqli_fetch_assoc($result)) {
            // Verify the hashed password
            if (password_verify($password, $row['password_user'])) {
                $_SESSION['userId'] = $row['userId'];
                $_SESSION['fullname'] = $row['userName'];
                $_SESSION['email'] = $email;
                $_SESSION['role'] = "Student";
                header("Location: ../../../../../user-interface/src/html/lms/dashboard-u.php");
            } else {
                $error = urlencode("Incorrect Username or password");
                echo "test 1";
                header("Location: auth-login.php?error={$error}");
            }
        } else if ($result2 && $row = mysqli_fetch_assoc($result2)) {
            // Verify the hashed password
            if (password_verify($password, $row['password_user'])) {
                $_SESSION['adminId'] = $row['adminId'];
                $_SESSION['adminName'] = $row['adminName'];
                $_SESSION['email'] = $email;
                $_SESSION['role'] = "Administrator";
                echo "success2";
                header("Location:  ../../../../../Admin/src/html/lms/index.php");
            } else {
                $error = urlencode("Incorrect Username or password");
                echo "test 1";
                //header("Location: auth-login.php?error={$error}");
            }
        } else {
            $error = urlencode("Incorrect Username or password");
            //header("Location: auth-login.php?error={$error}");
        }
     }
     ?>