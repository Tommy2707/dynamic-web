<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Id</td>
    <td>Menu</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from menu"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['menu']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>    
  </tr>	
<?php
}
?>
</table>

</body>
</html>