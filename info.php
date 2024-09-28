<?php
session_start();
include('db_connection.php'); // Include your database connection file

// Check if the 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Fetch data for the selected user from the 'pricingm' table
    $select_query = "SELECT * FROM pricingm WHERE id = $user_id";
    $result = mysqli_query($db_connection, $select_query);
    $user = mysqli_fetch_assoc($result);

    if (!$user) {
        echo "User not found.";
        exit;
    }

    // Fetch the 'name' from the 'pricingM' table
    $select_name_query = "SELECT name FROM pricingM WHERE id = $user_id"; // Adjust the query as needed
    $name_result = mysqli_query($db_connection, $select_name_query);
    $name_data = mysqli_fetch_assoc($name_result);
    $name = $name_data['name']; // Get the 'name' value

    if (!$name) {
        echo "Name not found.";
        exit;
    }
}

// Check if the form was submitted for updating
if (isset($_POST['update'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    // Retrieve other form data as needed

    // Update the data in the database
    $update_query = "UPDATE pricingm SET name = '$name' WHERE id = $user_id";
    $update_result = mysqli_query($db_connection, $update_query);

    if ($update_result) {
        $_SESSION['msg'] = "Data updated successfully";
        // Redirect back to the same page to show the updated data
        header('location: edit_profile.php?id=' . $user_id);
        exit;
    } else {
        $_SESSION['msg'] = "Error updating data: " . mysqli_error($db_connection);
    }
}
?>

<!-- Create a form to edit and update the data -->
<form action="edit_profile.php?id=<?php echo $user_id; ?>" method="post">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <label>Name: <input type="text" name="name" value="<?php echo $user['name']; ?>"></label>
    <!-- Add form fields for other columns you want to edit -->
    <input type="submit" name="update" value="Update">
</form>

<!-- Display success/error message -->
<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
