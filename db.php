<?php // db.php
// connect to database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "eshu@123";
global $dbhost, $dbuser, $dbpass;

 $con= @mysql_connect($dbhost, $dbuser, $dbpass)
 or error("unable to connect");
 echo("Connected to mysql");
 ?>
 <html>
 </head>
 </head>
 <body><br></body></html>
 <?php
 
 
 $select= mysql_select_db('hackathon')
 or error("Could not connect to database");
 echo"Connected to database";
?>