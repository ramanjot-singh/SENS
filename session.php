<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// Selecting Database
//$db = mysql_select_db("company", $connection);
session_start();// Starting Session
// Storing Session
echo $_POST['Email'];
//$user_check=$_SESSION['login_user'];
$_SESSION['sessionuser']=$_POST['Email'];
// SQL Query To Fetch Complete Information Of User
//header('Location: rough.php'); // Redirecting To Home Page


?>