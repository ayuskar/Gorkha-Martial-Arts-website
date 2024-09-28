<?php 
session_start();
include ('db_connection.php');

// Check if the form was submitted for updating
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $totalmembershipprice = $_POST['totalmembershipprice'];
    $membershipdate = $_POST['membershipdate'];
    $selfdefencedate = $_POST['selfdefencedate'];
    $fitnessroom = $_POST['fitnessroom'];
    $personalfitness = $_POST['personalfitness'];
    $totalspecialistprice = $_POST['totalspecialistprice'];
    $totalprice = $_POST['totalprice'];

    // Update the data in the database
    $update_query = "UPDATE pricingm 
                    SET name = '$name', totalmembershipprice = '$totalmembershipprice', 
                    membershipdate = '$membershipdate', selfdefencedate = '$selfdefencedate',
                    fitnessroom = '$fitnessroom', personalfitness = '$personalfitness',
                    totalspecialistprice = '$totalspecialistprice', totalprice = '$totalprice'
                    WHERE id = $id";
    $update_result = mysqli_query($db_connection, $update_query);

    if($update_result) {
        $_SESSION['msg'] = "Data updated successfully";
        header('location: your_current_page.php'); // Redirect to your current page
        exit;
    } else {
        $_SESSION['msg'] = "Error updating data: " . mysqli_error($db_connection);
    }
}

// Fetch the data from the database
$select_query ="select * from pricingm";
$result = mysqli_query($db_connection, $select_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Helvetica Neue', Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        background-image:url('mem.jpg');
        background-size:cover;
    }

    .container {
        max-width: 2000px;
        margin: 0 auto;
        padding: 35px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    
        border-radius: 8px;
    }

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: center;
        border: 1px solid #e9ecef;
    }

    .table th {
        background-color: #343a40;
        color: #ffffff;
    }

    /* Alternating row colors */
    .table tr:nth-child(even) {
       
    }

    /* Hover effect for rows */
    .table tr:hover {
        background-color: #e2e6ea;
    }

    /* Responsive styles */
    @media screen and (max-width: 768px) {
        .table th,
        .table td {
            padding: 10px 12px;
        }
    }

    /* Card styles */
    .card-header {
        background-color: #343a40;
        color: #ffffff;
        text-align: center;
    }

    .card-body {
        padding: 20px;
    }

    /* Back button styles */
    .btn-back {
        margin-bottom: 20px;
    }
</style>

    <title>Membership Info</title>
</head>
<?php require('header.php')  ?>
<body class="bg-dark">
    <div class="container">
    <form action="info_processing.php" method="post">
        <div class="row mt-5">
            <div class="col">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td> User ID</td>
                            <td> Name</td>
                            <td> Totalmembership price(In £.)</td>
                            <td>Membership Starting Date</td>
                            
                            <td>Selfdefence Starting Date</td>
                            <td>Fitnessroom total(In £.)</td>
                           
                            <td>Personalfitness total(In £.)</td>
                        
                            <td>Totalspecialist Price(In £.)</td>
                            <td>Total Price(In £.)</td>
                        </tr>
                        <?php
                          while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                            <td><span class="editable" data-userid="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></span></td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['totalmembershipprice']; ?> </td>
                                <td> <?php echo $row['membershipdate']; ?> </td>
                             
                                <td> <?php echo $row['selfdefencedate']; ?> </td>
                                <td> <?php echo $row['fitnessroom']?> </td>                                 
                               
                                <td> <?php echo $row['personalfitness']; ?> </td>
                              
                                <td> <?php echo $row['totalspecialistprice']; ?> </td>
                                <td> <?php echo $row['totalprice']; ?> </td>
                                <td><button class="btn btn-primary"><a href="update.php? updateid='.$id.'"class="text-light">Edit</button>
                                <button class="btn btn-danger"><a href="userdelete.php">Delete</a></td>
                                ;
            
                            </tr>
                          <?php
                          }
                        ?>
                    </table>
                </div>
                <a href="edit_profile.php" class="btn btn-primary btn-back">Back</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const editButtons = document.querySelectorAll('.edit-button');
            editButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const row = button.closest('tr');
                    const userID = row.querySelector('.editable').getAttribute('data-userid');
                    const name = row.querySelector('.editable').textContent;
                    // Retrieve other data fields as needed

                    // Replace the row with an editable form
                    const formHTML = `
                        <td>${userID}</td>
                        <td><input type="text" id="editedName" value="${name}"></td>
                        <!-- Add input fields for other data fields here -->
                        <td><button class="save-button" data-userid="${userID}">Save</button></td>
                    `;

                    row.innerHTML = formHTML;

                    // Add event listener for "Save" button
                    const saveButton = row.querySelector('.save-button');
                    saveButton.addEventListener('click', () => {
                        const editedName = document.getElementById('editedName').value;
                        // Retrieve other edited values as needed
                        const userID = saveButton.getAttribute('data-userid');

                        // Send an AJAX request to update the data in the database
                        // Implement the PHP script to handle the update
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', 'update_data.php', true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                // Handle the response from the server (e.g., display a success message)
                                console.log(xhr.responseText);
                            } else {
                                console.error('Error:', xhr.status);
                            }
                        };
                        const data = `userID=${userID}&editedName=${editedName}`;
                        xhr.send(data);
                    });
                });
            });
        });
    </script>
</body>
</html>
