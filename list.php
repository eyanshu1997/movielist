<?php // login.php
include 'common.php';
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "eshu@123";
global $dbhost, $dbuser, $dbpass;

 $con= @mysql_connect($dbhost, $dbuser, $dbpass)
 or error("unable to connect");
 $select= mysql_select_db('hackathon')
 or error("Could not connect to database");
?>
<?php
//Start session
session_start();
$result = mysql_query("SELECT post,user FROM post");
echo "These are the list of movies that are there in your hostel and people having them";
?>

<html>
<head>
</head>
<body><br> <br>
</body>
</html>
<?php

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf(" %s", $row[0]);
echo "         ";	
	printf(" %s", $row[1]);
	?>

<html>
<head>
</head>
<body><br> <br><hr>
</body>
</html>
<?php
}

mysql_free_result($result);
?>