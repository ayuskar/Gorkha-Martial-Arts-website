<?php 
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host = 'localhost:3307';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'abc_db'; 
$db_connection = mysqli_connect($host, $db_username, $db_password, $db_name);

?>