<?php 
session_start();
// unset($_SESSION['user']);
session_unset();
session_destroy();
$_SESSION['msg']="You are already \"logged\" out";
header('location: login.php');
exit;
?>	      