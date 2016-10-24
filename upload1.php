<?php
include 'common.php';
include 'db.php';
session_start();
$newname= $_SESSION['SESS_MEMBER_ID'];
$ext = ".txt";
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$new = $target_dir . $newname . $ext ;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$new)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$user= $_SESSION['SESS_MEMBER_ID'];
date_default_timezone_set('Asia/Calcutta');
$date = date('Y/m/d');
$time = date('H:i:s');
$searchthis1 = ".avi";
$searchthis = ".mp4";
$matches = array();
$handle = @fopen($new, "r");
if ($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle);
        if(strpos($buffer, $searchthis) !== FALSE)
		{
            $matches = $buffer;
			$mysql = "INSERT INTO post(post,time,date,user) VALUES('$matches','$time','$date','$user')";

$result = mysql_query($mysql,$con) or
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact software provider.'); 


error('entered data sucessfully.'); 

		}
		if(strpos($buffer, $searchthis1) !== FALSE)
		{
            $matches = $buffer;
			$mysql = "INSERT INTO post(post,time,date,user) VALUES('$matches','$time','$date','$user')";

$result = mysql_query($mysql,$con) or
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact software provider.'); 

        }
	}
	fclose($handle);
 echo "reached end of file";
    
}


    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>  