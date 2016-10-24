<?php
include 'db.php';
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) 
	{
	header("location: index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title> Members-Only Page </title>
  <style>

#header {
    background-color:CDF6ED;
    color:black;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    width:300px;
    float:left;
    padding:5px; 
}
#section {
    width:350px;
    float:left;
    padding:10px; 
}
</style>

</head>
<body>
<body>

<div id="header">
<table border="0" cellpadding="0" cellspacing="5" align="center">
<tr>
<h1>Post the name of movie directly
<?php
$user= $_SESSION['SESS_MEMBER_ID'];
echo $user;
?>
</h1>
Your no of movies are:

<?php
$user= $_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * from post WHERE user = '$user'",$con);
$rows = mysql_num_rows($result);
echo $rows;
?>
</td>
<td></td> 
</tr>
<form method="post" id=post action="post.php" align="center">
  <tr>


      <td>

       <input type="text"
       cols="100"
       rows="5" 
       style="width:200px; height:50px;" 
       name="post"
       id="post" 
       value="" />

        <font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>
	  </tr>
	  <tr>
      <td>

   <input type="submit" name="submitok" value="Post   " />
      </td>
	  </tr>
	  

  </table>

</form>

<table border="0" cellpadding="0" cellspacing="5" align="right">
<tr>
<td>

</td>
</tr>
</table>
</div>

<div id="nav">
<h1>If you want to list multiple movies together folow these steps</h1>
<u>
First step</u><br/>
Download the file provided <a href="e.bat">here</a>
<br/><hr/><u>
Second step</u><br/>
Paste the downloaded file in the directory of movies<br/>
<hr/><u>
Third step</u><br/>
Run the downloaded file. It will take time.<br/>
After it is done.
<br/>
<hr/><u>
Forth step</u><br/>
Upoad the created file report.txt <a href="upload.php"> here</a>
</br>
<hr>
</div>

<div id="section">
<p><h3>This service will list all the available movies in your hostel please upload your list of movies to go on this nice sharing experience.
or you can browse here for the list of movies <a href= "list.php">click here</a><br>
<br>
<br>
<br>
<hr>
<a href="logout.php" color="black">logout</a>
</h3></p>
<br/>
<br/><h3>
</div>

</body>


</html>


