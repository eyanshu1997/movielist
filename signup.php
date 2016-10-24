<?php // signup.php
include 'common.php';
include 'db.php';
?>
<?php
// Process signup submission
if ($_POST['newid']=='' or $_POST['newname']==''or $_POST['newemail']=='')
 {
error('One or more required fields were left blank.\n'.
'Please fill them in and try again.');
}

$userid = $_POST['newid'];
$password = $_POST['pass'];
$fullname = $_POST['newname'];
$email = $_POST['newemail'];
$email = $_POST['newemail'];
$gender = $_POST['gender'];
$room = $_POST['room'];
$inname = $_POST['inname'];
$sql = "INSERT INTO user(userid, password, fullname, email, gender,room,institute) VALUES('$userid','$password','$fullname','$email','$inname','$room','$inname')";

$result = mysql_query($sql,$con) or
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact software provider.'); 
$sql = "INSERT INTO stud_data (usr_name,usr_roll,usr_pass) VALUES('".$userid."','".$room."','".$password."')";
$result = mysql_query($sql,$con) or
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact software provider.'); 
?>
 <html>
 <head>
 </head>
 <body><br></body></html>
 <?php
echo "\n entered data sucessfully";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Registration Complete </title>
<meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1" />
</head>
<body>
<p><strong>User registration successful!</strong></p>
<p> To log in,click <a href="index.php">here</a> to return to the login
page, and enter your new personal userid and password.</p>
</body>
</html>

