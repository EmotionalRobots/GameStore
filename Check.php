<?php
// start session
session_start();

// check login session
if (!$_SESSION['loggedin']) {
   header("Login.php");
   exit();
}  
?>
