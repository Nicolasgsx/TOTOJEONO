<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'test';


// Create connection
$pripoj = new mysqli($servername, $username, $password, $database);

// Check connection
if ($pripoj->connect_error) {
  die("Something went wrong :(, connection failed: " . $link->connect_error);
}
echo "Web je uspesne pripojeny k databaze :)". "<br>";
?>