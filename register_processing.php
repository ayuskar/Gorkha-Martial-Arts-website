<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('db_connection.php');
mysqli_report(MYSQLI_REPORT_ERROR);
function validateAlphabets($input) {
    return preg_match("/^[a-zA-Z ]*$/", $input);
}

// Function to validate numbers only
function validateNumbers($input) {
    return preg_match("/^[0-9]*$/", $input);
}
if (!$_POST) {
    $_SESSION['$msg'] = "Cannot process the form";
    header('location: register.php');
    exit;
} else {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['emailaddress'];
    $password = $_POST['password'];
    $repassword = $_POST['confirm_password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];
    $error = false;
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'img/'.$image;
 
    $select = mysqli_query($db_connection, "SELECT * FROM `gorkhaaM` WHERE `email` = '$email' AND `password` = '$password'") or die('query failed');
 
    if(mysqli_num_rows($select) > 0){
       $message = 'user already exist'; 
    }else{
       if($password != $repassword){
          $message[] = 'confirm password not matched!';
       }elseif($image_size > 2000000){
          $message[] = 'image size is too large!';
       }else{
          $insert = mysqli_query($db_connection, "INSERT INTO `gorkhaaM`(`name`, `email`, `password`, `photo`) VALUES('$name', '$email', '$password', '$image')") or die('query failed');
 
          if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            
             header('location:home.php');
          }else{
             $message[] = 'registeration failed!';
          }
       }
    }
}
    if ($repassword != $password) {
        $_SESSION['password_error'] = "Password does not match";
        $error = true;
    }
    if (!validateAlphabets($name)) {
        $_SESSION['msg'] = "Name should contain alphabets only.";
        // Redirect back to the registration page
        header("Location: register.php");
        exit();
    }

    // Validate Phone Number
    if (!validateNumbers($phone)) {
        $_SESSION['msg'] = "Phone Number should contain numbers only.";
        // Redirect back to the registration page
        header("Location: register.php");
        exit();
    }
    if (empty($name)) {
        $_SESSION['name_error'] = "Name not supplied.";
        $error = true;
    }
    if (!is_numeric($phone)) {
        $_SESSION['ph_number_error'] = "Phone should be only number";
        $error = true;
    }
    if ($error) {
        header('location: register.php');
        exit;
    }

   // Validate form data (you can add your own validation logic here)


    // Move the uploaded file to the target location
    move_uploaded_file($profilePictureTmp, $targetFilePath);

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host = 'localhost:3307';
    $db_username = 'root';
    $db_password = '';  
    $db_name = 'abc_db';
    $db_connection = mysqli_connect($host, $db_username, $db_password, $db_name);

    // Include db_connection.php (you can remove this line if not needed)
    include('db_connection.php');

    $photo_name = $photo['name'];
    $password = md5($password);

    $insert_query = "INSERT INTO `gorkhaaM` (
        `name`, 
        `address`, 
        `email`, 
        `password`, 
        `phone`, 
        `gender`, 
        `photo`, 
        `message`, 
        `created`,
        `updated`
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";

    $stmt = mysqli_prepare($db_connection, $insert_query);
    mysqli_stmt_bind_param(
        $stmt,
        "ssssisss", // s for string, i for integer
        $name,
        $address,
        $email,
        $password,
        $phone,
        $gender,
        $photo_name,
        $message
    );

    if (mysqli_stmt_execute($stmt)) {
        header('location: home.php');
        $_SESSION['msg'] = "Registered successfully";
    } else {
        header('location: register.php');
        $_SESSION['msg'] = "Registration failed";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($db_connection);

?>
