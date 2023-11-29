<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="s1mca";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    
  die("<b>CONNECTION FAILED!!: </b><br><br>" . $conn->connect_error);
}

echo "<b>CONNECTION SUCCESSFUL</b><br>";

?>