<?php 
require_once('connection.php');
$user = isset($_GET["user"]) ? $_GET["user"] : "";

$sql = "SELECT * FROM udaje_reg WHERE id=$user";
$result = $pripoj->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
    array_push($users, $user);
}
?>