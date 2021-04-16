<?php
   $host        = "host = ec2-52-45-73-150.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d64k2ekkin6c2v";
   $credentials = "user = yimmyalkizdwan password=78a7dd7415e3cb879d5d99e6a1de69acb74314083261b47dc56afd38cabddb06";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
