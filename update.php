<?php session_start();
include 'db_connection.php';
if(isset($_POST['submit'])){
$name=$_POST['membershipdate'];
$email=$_POST['selfdefencedate']; 
$mobile=$_POST['fitnessroom']; 
$password=$_POST['personalfitness'];
- - - - $sql="insert into `crud` · (name,email,mobile, password) values('$name', '$email', '$mobile', '$password')";
-$result=mysqli_query($con, $sql);
if($result){
· // · echo · "Data-inserted-successfully";
header('location:membershipinfor.php');
}else{
die(mysqli_error($con));
}
}
?>