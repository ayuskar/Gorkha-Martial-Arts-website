<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // You can add any validation or data processing here
    
    // Replace the following lines with your own database credentials
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host = 'localhost:3307';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'abc_db'; 
    $db_connection = mysqli_connect($host, $db_username, $db_password, $db_name);
    
    // Check the database connection
    if ($db_connection === false) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // You can add any database queries here, such as inserting data
    $sql = "INSERT INTO `message` (`name`, `message`) VALUES (?, ?, NOW())";
    
    $stmt = $db_connection->prepare($sql);
    $stmt->bind_param("ss", $email, $message);
    
    if ($stmt->execute()) {
        // Redirect the user back to the contact page with a success message
        header("Location: home.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close the database connection
    $stmt->close();
    $db_connection->close();
}
?>
