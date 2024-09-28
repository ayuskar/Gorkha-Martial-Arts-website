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
$figure =  $_POST['photo'];
$address = $_POST['address'];
$email = $_POST['email']; // Make sure the input name matches 'email'
$old_password = $_POST['old_password']; // Make sure the input name matches 'old_password'
$new_password = $_POST['new_password']; // Make sure the input name matches 'new_password'
$confirm_password = $_POST['confirm_password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

// Form validation code...

// Check old password
$old_password = md5($old_password);
$select_query = "SELECT * FROM `gorkhaaM`
WHERE `password` = '$old_password' 
AND `id` = '$user_id'";
$result = mysqli_query($db_connection, $select_query);

if (mysqli_num_rows($result) <= 0) {
    $_SESSION['msg'] = "User not found";
    header('location: edit_profile.php');
    exit;
}

// Update the user profile
$new_password = md5($new_password);
$update_query = "UPDATE `gorkhaaM`
SET `name` = '$name',
`address` = '$address',
`email` = '$email',
`password` = '$new_password',
`phone` = '$phone',
`gender` = '$gender'
WHERE `id` = '$user_id'";
$result = mysqli_query($db_connection, $update_query);

if ($result) {
    $_SESSION['msg'] = 'Profile updated';
    header('location: home.php');
} else {
    $_SESSION['msg'] = 'Profile not updated';
    header('location: edit_profile.php');
}
?>
