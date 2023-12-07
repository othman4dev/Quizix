<?php
session_start();
session_unset();
session_destroy();
echo"hello";
header('location:Quizix/auth/src/html/pages/auths/auth-login.php')

?>