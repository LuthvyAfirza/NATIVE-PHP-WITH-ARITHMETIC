<?php 
$userlogin = "schoolmart";
$passlogin = "schoolmart";
 
 $username = $_POST['username'];
 $password = $_POST['password'];

 if ($username == $userlogin && $password == $passlogin) {
     session_start();
     $_SESSION['username'] = $username;
     $_SESSION['password'] = $password;
     header("Location: landing.php");
 } 
 else {
     header("Location: login.html");
}
?>