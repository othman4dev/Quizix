<?php
session_start();
session_unset();
session_destroy();
header('Location : Quizix/auth/src/html/pages/auths/auth-login.php');

?>