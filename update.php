<?php
include("connection.php");
?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $updateSql = "UPDATE users SET name='$name',
    email = '$email', password ='$password' WHERE id=$id ";
    if($conn->query($updateSql)==TRUE){
        echo "Record update successfully";
    }
    else{
        echo "Error:".$conn->error;
    }
}

?>

<form method="post">
    Name:<input type = "text" name="name" value="<?=$row['name']; ?>"><br><br> 
      Email:<input type = "email" name="email" value="<?=$row['email']; ?>"><br><br> 
      Password:<input type = "password" name="password" value="<?=$row['password']; ?>"><br><br> 
    <button type="submit" name="update" >Update</button>
</form>