<?php 
   session_start();
   $user_id = $_SESSION['user']['id'];
   include 'db_connection.php';
   $delete_query = "DELETE FROM `gorkhaaM`
                    WHERE `id` = '$user_id'";
    $result = mysqli_query($db_connection, $delete_query);
    if ($result){
    	session_unset();
    	session_destroy();
      header('location:register.php');
    }
    else{
        $_SESSION['msg'] = "Error in deleting: " . mysqli_error($db_connection);
        header('location: home.php');
    }
?>
