<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>