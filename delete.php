<?php 
include("connection.php");
?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=$id";

if($conn->query($sql)==TRUE){
    echo 'Record deleted successfully';
}else{
    echo 'Error:'.$conn->error;
}
?>
<a href="read.php">Go back</a>