<?php // login.php
include 'common.php';
include 'db.php';
?>
<?php
//Start session
session_start();

// Process signup submission
if ($_POST['uid']=='' or $_POST['pwd']=='')
 {
error('One or more required fields were left blank.\n'.
'Please fill them in and try again.');
}

$userid = "$_POST[uid]";
$password = "$_POST[pwd]";
 $sql = "SELECT * FROM user WHERE userid='$userid' AND password='$password'";
$result = mysql_query($sql,$con)
or
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact software provider.'); 
?>
 <html>
 </head>
 </head>
 <body><br></body></html>
 <?php


		//Check whether the query was successful or not
if($result) {
		if(mysql_num_rows($result) == 0) {
			//Login failed
			header("location: errorlogin.php");
			exit();
			
		}
		else 
		{
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['userid'];
			echo "\n Loged in sucessfully and now will be redirected";
			$k=0;
			for($i=0;$i<100;$i++)
			{
			  $k+=1;
			}
			session_write_close();
			header("location: main.php");
			exit();
		}
	}
	else 
	{
		die("Query failed");
	}	
	


?>

