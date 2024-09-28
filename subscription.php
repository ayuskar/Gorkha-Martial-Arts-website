<?php 
   session_start();
   include'db_connection.php';

   $select_query =  "SELECT * FROM  `subscriptionss`";
   $result = mysqli_query($db_connection, $select_query);

   if(mysqli_num_rows($result) > 0){
   	$subscriptions = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // 	var_dump($subscriptions);

   }
   else{
   	echo"No subscriptions available";
   }
?>



<?php 
  if (! isset( $_SESSION['user'])){
    $_SESSION['msg'] = "First,sign in to access of the page.";
    header('location: sign.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .h1{
            color:white;
        }
    <title>Subscription</title>
</head>
<body>
    <?php
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
    <?php 
    require('header.php'); ?>
    <section>
       <h1>Subscirptions</h1>
       <?php 
       if(isset($subscriptions) && count($subscriptions)>0){
       	foreach ($subscriptions as $subscriptions ) {
       	?>
        <div class = "sub">
        <p><?php echo $subscriptions['subschoosed']; ?> </p>
    
        <p> 
            <?php 
            if ($subscriptions ['price']){
               echo "£" , $subscriptions['price'];
            }
            else{ 
                echo "Free";
            } ?>
            </p>
        <p> <?php echo $subscriptions['startingdatetime']; ?> </p>       	
  </div>
  <?php 
}
}
   else{
       ?>
       <h2>No subscription available</h2>        	
      <?php  }
   
?>
    </section>
    <footer>We call this a footer</footer>

</body>
</html>     