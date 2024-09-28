<style>
    /* Add this CSS to your styles.css file */

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}
.hidden-paragraph {
        display: none;
        padding: 10px;
        background-color: #f2f2f2;
    }
    <style>
    /* Add this CSS to your styles.css file */
    /* ... (previous CSS styles) ... */

    /* Style for the hidden paragraph */
    .hidden-paragraph {
        display: none;
        padding: 10px;
        background-color: #f2f2f2;
    }
</style>

<script>
    // JavaScript to toggle the visibility of the paragraph when the name is clicked
    function toggleParagraph() {
        var paragraph = document.getElementById('hidden-paragraph');
        if (paragraph.style.display === 'none') {
            paragraph.style.display = 'block';
        } else {
            paragraph.style.display = 'none';
        }
    }
</script>

<?php
session_start();

// Database connection setup (unchanged)
$host = 'localhost:3307';
$db_username = 'root';
$db_password = '';
$db_name = 'abc_db';
$db_connection = mysqli_connect($host, $db_username, $db_password, $db_name);

// Check if the connection was successful (unchanged)
if (!$db_connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$select_query = "SELECT * FROM `pricing`"; // Adjust table name as needed
$result = mysqli_query($db_connection, $select_query);

if (!$result) {
    echo "Error: " . mysqli_error($db_connection);
} else {
    // Display the data in an HTML table with a clickable name

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['totalmembershipprice'] . '</td>';
        echo '<td>' . $row['membershipdate'] . '</td>';
        echo '<td>' . $row['selfdefensecourse'] . '</td>';
        echo '<td>' . $row['selfdefencedate'] . '</td>';
        echo '<td>' . $row['fitnessroom'] . '</td>';
        echo '<td>' . $row['fitnessroomdate'] . '</td>';
        echo '<td>' . $row['personalfitness'] . '</td>';
        echo '<td>' . $row['personalfitnessdate'] . '</td>';
        echo '<td>' . $row['totalspecialistprice'] . '</td>';
        echo '<td>' . $row['totalprice'] . '</td>';
        echo '</tr>';
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        // Make the name section clickable
        echo '<td style="cursor: pointer;" onclick="toggleParagraph()">' . $row['name'] . '</td>';
        // Rest of the table data (unchanged)
        // ...
        echo '</tr>';
        // Display the hidden paragraph with additional information
        echo '<tr>';
        echo '<td colspan="11" class="hidden-paragraph" id="hidden-paragraph">';
        echo 'Additional Information for ' . $row['name'] . ':<br>';
        echo 'Some details here...'; // Add additional details here
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
}

mysqli_close($db_connection);
?>
