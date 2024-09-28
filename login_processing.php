<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$username = $_POST['email'];
$password = $_POST['password'];
//add some validation
include('db_connection.php');
 $password = md5($password);
$select_query = "SELECT * from `gorkhaaM`
where `email` = '$username' 
and `password` = '$password'";
$result = mysqli_query($db_connection, $select_query);

if(mysqli_num_rows($result) > 0){
 $_SESSION['user']= mysqli_fetch_assoc($result);
 
 header('location: home.php');
 exit;
} else{
	$_SESSION['msg'] = "Username and/or password incorrect!";
	header('location: sign.php');
	exit;
}
?> 