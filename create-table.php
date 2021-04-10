<?php
/*$servername = "postgres";
$username = "yimmyalkizdwan";
$password = "78a7dd7415e3cb879d5d99e6a1de69acb74314083261b47dc56afd38cabddb06";
$dbname = "Menu";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

//sql to create table
$sql = "CREATE TABLE Menu (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
menu VARCHAR(30) NOT NULL
)";

if($conn->query($sql) === TRUE){
    echo "Table menu created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
*/
