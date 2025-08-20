<?php 
include("connection.php");
?>

<h2>User List</h2>
<table border= "1" >
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
        <th>Edit</th>
     
    </tr>
<?php 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['email']}</td>
    <td>{$row['password']}</td>

    <td>
    <a href='update.php? id={$row['id']}'>Edit</a>
    <a href='delete.php? id={$row['id']}'>Delete</a>
    </td>
    </tr>";
}
?>
</table>