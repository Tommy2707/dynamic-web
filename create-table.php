<?php
$Host = "ec2-52-45-73-150.compute-1.amazonaws.com";
$Port = "5432";
$Database = "d64k2ekkin6c2v";
$User = "yimmyalkizdwan";
$Password = "78a7dd7415e3cb879d5d99e6a1de69acb74314083261b47dc56afd38cabddb06";
//Create connection
$dbConn = new postgresqli($Host, $Port, $Database, $User, $Password);
//Check connection
if ($dbConn->connect_error){
  die("Connection failed: " . $dbConn->connect-error);
}
//sql to create table
$postgresql = "CREATE TABLE Menu (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    menu VARCHAR(30) NOT NULL
    )";
    
    if($dbConn->query($postgresql) === TRUE){
        echo "Table menu created successfully";
    } else {
        echo "Error creating table: " . $dbConn->error;
    }
    $dbConn->close();
?>
