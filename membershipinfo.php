<?php 
session_start();
  if (! isset( $_SESSION['user'])){
    $_SESSION['msg'] = "First,sign in to access of the page.";
    header('location: login.php');
    exit;
  }
  include('db_connection.php');
  // fetch the data from the database
  $user_id =  $_SESSION['user']['id'];
  $select_query = "SELECT * FROM `pricing` 
  WHERE `id` = '$user_id'";
  $result = mysqli_query($db_connection, $select_query);
  $user = mysqli_fetch_assoc($result);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile page</title>
    <style >
        /* Reset some default styles for better consistency */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styles */
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  background-image:url('mem.jpg');
  background-size:cover;
  padding:10px;
}


/* Main section styles */
.editform {
  max-width: 600px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

/* Form styles */
form {
  display: grid;
  gap: 15px;
}

label {
  font-weight: bold;
}

.{
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-transform:none;
}

/* Gender radio button styles */
.gender {
  display: flex;
  gap: 10px;
  align-items: center;
}

/* Submit button styles */
input[type="submit"] {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #555;
}

/* Footer styles */
footer {
  text-align: center;
  padding: 10px;
  background-color: #333;
  color: #fff;
}

/* Responsive styles for smaller screens */
@media screen and (max-width: 768px) {
  section {
    max-width: 90%;
  }
}

    </style>
</head>
<body>
<?php require('header.php'); ?>
    <?php
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<div class="editform">
    <form action="membershipp.php" method="post">
        <div class="personname">
             <h2>See membership</h2>
        <label>Name: </label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>">
    </div>
    <div>
        <label> Address</label>
        <input type="text" name="totalmembershipprice" value="<?php echo $user['totalmembershipprice']; ?>">
    </div>
    <div>
        <label>Email </label>
        <input type="email" name="selfdefencecourse" value="<?php echo $user['selfdefencecourse']; ?>">
    </div>
    <div>
        <label>Old Password</label>
        <input type="password" name="fitnessroom" required placeholder="fitnessroom">
    </div>
    <div>
        <label>New Password</label>
        <input type="password" name="personalfitness" placeholder="personalfitness">
    </div>
    <div>
        <label>Re-type New Password</label>
        <input type="password" name="totalprice" placeholder="totalprice">
    </div>
<input a href ="edit.profile.php" type="submit" name="update" value="Back"> 
</body>
</html>