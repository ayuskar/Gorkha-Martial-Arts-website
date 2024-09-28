<?php
// Include your database connection
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userID = $_POST['userID'];
    $editedName = $_POST['editedName'];
    // Retrieve other edited values as needed

    // Update the data in the database
    $update_query = "UPDATE pricingm 
                    SET name = '$editedName'
                    WHERE id = $userID";
    $update_result = mysqli_query($db_connection, $update_query);

    if ($update_result) {
        echo "Data updated successfully";
    } else {
        echo "Error updating data: " . mysqli_error($db_connection);
    }
}
?>
