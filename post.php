<?php // post.php
include 'session.php';
include 'common.php';
include 'db.php';
?>
<?php
// Process signup submission
if ($_POST['post']=='' )
 {
error('One or more required fields were left blank.\n'.
'Please fill them in and try again.');
}
$post= $_POST['post'];
$user= $_SESSION['SESS_MEMBER_ID'];
?>
<html>
 <head>
 </head>
 <body><br></body></html>
 <?php
echo $user;
date_default_timezone_set('Asia/Calcutta');
$date = date('Y/m/d');
?>
<html>
 <head>
 </head>
 <body><br></body></html>
 <?php
echo $date;
$time = date('H:i:s');
?>
<html>
 <head>
 </head>
 <body><br></body></html>
 <?php
echo $time;
?>
<html>
 <head>
 </head>
 <body><br></body></html>
 <?php
$mysql = "INSERT INTO post(post,time,date,user) VALUES('$post','$time','$date','$user')";

$result = mysql_query($mysql,$con) or
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact software provider.'); 


error('entered data sucessfully.'); 
?>

