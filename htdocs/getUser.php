<?php require_once('connection.php');
$sql = "SELECT * FROM 'udaje_reg' WHERE id=".$GET['id'] ;
//$result = $pripoj->query($sql);
//$user = null;

if($pripoj->query($sql) == TRUE){
echo "User loaded successfully";
}
else{
echo "Error while loading user";

}