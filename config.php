<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud_db";
 
/* Attempt to connect to MySQL database */
$con = new mysqli($servername, $username, $password, $db_name);
 
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
 
?>