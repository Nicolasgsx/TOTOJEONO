<?php 
include("connection.php");
$sql = "SELECT * FROM udaje_reg";
$result = $pripoj->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
array_push($users, $user);
}
?>