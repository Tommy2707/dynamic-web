
<?php
// connect to a database 
$dbConn = pg_connect("host=ec2-52-45-73-150.compute-1.amazonaws.com port=5432 dbname=d64k2ekkin6c2v user=yimmyalkizdwan password=78a7dd7415e3cb879d5d99e6a1de69acb74314083261b47dc56afd38cabddb06");
if (!$dbConn) {
    echo "An error occurred.\n";
    exit;
}
// Query data
$result = pg_query($dbConn, 'SELECT * FROM Menu');
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
// Show value
while ($row = pg_fetch_assoc($result)) {
    var_dump($row);
}
