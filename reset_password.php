<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $newPassword = $_POST["new_password"];
    // Validate the user's input and check if name and email match in your database
    // Implement your database query to verify the user's information here
    // If a match is found, update the user's password with the new one

    // Example: Replace the following lines with your database logic
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host = 'localhost:3307';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'abc_db'; 
    $db_connection = mysqli_connect($host, $db_username, $db_password, $db_name);

    if ($db_connection->connect_error) {
        die("Connection failed: " . $db_connection->connect_error);
    }

    // Check if the name and email match a record in the database
    $sql = "SELECT * FROM `gorkhaam` WHERE `name` = '$name' AND `email` = '$email'";
    $result = $db_connection->query($sql);

    if ($result->num_rows > 0) {
        // Update the user's password
        $newPassword = md5($newPassword);
        $update_query = "UPDATE `gorkhaam` SET `password` = '$newPassword' WHERE `name` = '$name' AND `email` = '$email'";
        $result = mysqli_query($db_connection, $update_query);
   
        if ($result) {
            $_SESSION['msg'] = 'Password updated';
            header('location: login.php');
        } else {
            $_SESSION['msg'] = 'Password not updated';
            header('location: reset_password.php');
        }
    }

    $db_connection->close();
}
?>
