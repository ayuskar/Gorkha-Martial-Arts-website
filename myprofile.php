<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    $_SESSION['msg'] = "Please log in to view your profile.";
    header('location: login.php');
    exit;
}

// Assuming you have a user ID stored in the session
$user_id = $_SESSION['user']['id'];

// Directory where profile photos are stored
$photoDirectory = "img/";  // Update this to your actual directory

// Construct the file path to the user's profile photo
$profilePhotoPath = $photoDirectory . "profile_photo_" . $user_id . ".jpg";  // Adjust the file extension as needed (jpg, jpeg, png, etc.)

// Check if the file exists
if (file_exists($profilePhotoPath)) {
    // Display the user's profile photo
    echo '<img src="' . $profilePhotoPath . '" alt="Profile Photo">';
} else {
    // If the photo doesn't exist, you can display a default image or a message
    echo '<img src="default_profile_photo.jpg" alt="Default Profile Photo">';
}

// You can also add more user profile information here
?>
