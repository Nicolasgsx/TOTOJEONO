<?php require_once('connection.php');
$sql = "DELETE FROM udaje_reg WHERE id=".$_GET['id'] ;
//$result = $pripoj->query($sql);
$user = null;

if($pripoj->query($sql) == TRUE){
echo "Record deleted successfully";
}
else{
echo "Error while deleting user" . $pripoj->error;

}