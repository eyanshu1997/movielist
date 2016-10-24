<?php // post.php
session_start();
include 'common.php';
include 'db.php';
?>
<?php
// Process signup submission
$user= $_SESSION['SESS_MEMBER_ID'];
date_default_timezone_set('Asia/Calcutta');
$date = date('Y/m/d');
$time = date('H:i:s');



$newname= $_SESSION['SESS_MEMBER_ID'];
$ext = ".txt";
$target_dir = "upload/";
$new = $target_dir . $newname . $ext ;
$searchthis1 = "*.avi";
$searchthis = "*.mp4";
$matches = array();
$handle = @fopen($new, "r");
if ($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle);
        if(strpos($buffer, $searchthis) !== FALSE)
		{
            $matches[] = $buffer;
			$mysql = "INSERT INTO post(post,time,date,user) VALUES('$buffer','$time','$date','$user')";

$result = mysql_query($mysql,$con) or
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact software provider.'); 


error('entered data sucessfully.'); 

		}
		if(strpos($buffer, $searchthis1) !== FALSE)
		{
            $matches[] = $buffer;
			$mysql = "INSERT INTO post(post,time,date,user) VALUES('$buffer','$time','$date','$user')";

$result = mysql_query($mysql,$con) or
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact software provider.'); 


error('entered data sucessfully.'); 

        }
	}
	fclose($handle);
	echo('entered data sucessfully.');
    header("location: errorlogin.php");	
    
}

?>
