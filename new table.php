<?php
include 'common.php';
include 'db.php';
?>
<?php

$sql= "CREATE TABLE user(
ID INT(6) PRIMARY KEY AUTO_INCREMENT,
userid VARCHAR(100) UNIQUE NOT NULL,
password VARCHAR(16) NOT NULL,
fullname VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL, 
gender VARCHAR(100) NOT NULL)";
 if( mysql_query($sql,$con))
 {
 echo("user table created");
 ?>
 
  <html>
 </head>
 </head>
 <body><br></body></html>
 <?php
 echo("<a href=index.php>click here to continue</a>");
 }
 else
 {
 error("couldnt user table");
}
 ?>