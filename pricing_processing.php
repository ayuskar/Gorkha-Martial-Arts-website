<?php
session_start();

if (isset($_POST['submitForm'])) {
    // Retrieve form data
    $fitnessRoomTotal = $_POST['fitnessRoomTotal'];
    $fitnessTrainingTotal = $_POST['fitnessTrainingTotal'];
    $membershipPrice = $_POST['membershipPrice'];
    $totalSpecialistPrice = $_POST['totalSpecialistPrice'];
    $totalPrice = $_POST['totalPrice'];
    $selfdefencedate = $_POST['selfdefencedate'];
    $membershipdate = $_POST['membershipdate'];

    // Database connection setup
    $host = 'localhost:3307';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'abc_db';
    $db_connection = mysqli_connect($host, $db_username, $db_password, $db_name);

    // Check if the connection was successful
    if (!$db_connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the 'name' from the 'gorkhaaM' table (if needed)
    // Replace 'column_name' with the actual column name containing 'name'
    $select_query = "SELECT `name` FROM `gorkhaaM`"; // Adjust table name and column name as needed
    $result = mysqli_query($db_connection, $select_query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name']; // Replace 'column_name' with the actual column name containing 'name'

            $insert_query = "INSERT INTO `pricingm` (
                `name`,
                `totalmembershipprice`,
                `membershipdate`,
                `selfdefencedate`,
                `fitnessroom`,
                `personalfitness`,
                `totalspecialistprice`,
                `totalprice`
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($db_connection, $insert_query);

            if ($stmt) {
                // Bind parameters
                mysqli_stmt_bind_param($stmt, "sissiiii", $name, $membershipPrice, $membershipdate, $selfdefencedate, $fitnessRoomTotal, $fitnessTrainingTotal, $totalSpecialistPrice, $totalPrice);

                // Execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    header('location: home.php');
                    $_SESSION['msg'] = "Data inserted successfully";
                } else {
                    header('location: pricing.php');
                    $_SESSION['msg'] = "Error: " . mysqli_error($db_connection);
                }

                mysqli_stmt_close($stmt);
            } else {
                header('location: pricing.php');
                $_SESSION['msg'] = "Error: " . mysqli_error($db_connection);
            }
        }
    } else {
        header('location: pricing.php');
        $_SESSION['msg'] = "Error: " . mysqli_error($db_connection);
    }

    mysqli_close($db_connection);
}
?>
