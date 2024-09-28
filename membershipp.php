<?php
session_start();
if (!$_POST) {
    header('location: edit_profile.php');
    exit;
}

include 'db_connection.php';

// Get user ID from session
$user_id = $_SESSION['user']['id'];

// Get form data
$name = $_POST['name'];
$totalmembershipprice = $_POST['totalmembershipprice'];
$selfdefencecourse = $_POST['selfdefencecourse']; 
$fitnessroom = $_POST['fitnessroom']; 
$personalfitness = $_POST['personalfitness']; 
$totalprice = $_POST['totalprice'];

// Form validation code...

// Check old password
$select_query = "SELECT * FROM `pricing`
WHERE `id` = '$user_id'
`name` = '$name',
    `totalmembershipprice` = '$totalmembershipprice',
    `selfdefencecourse` = '$selfdefencecourse',
    `fitnessroom` = '$fitnessroom',
    `personalfitness` = '$personalfitness',
    `totalprice` = '$totalprice'";
$result = mysqli_query($db_connection, $select_query);
 
    

?>
