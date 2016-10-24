
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title> Please Log In for Access </title>
    <meta http-equiv="Content-Type"
      content="text/html; charset=iso-8859-1" />
	  <style>
	  /* "auto" makes the left and right margins center the wrapper */
#wrap { 
background-color: light-blue;
	width: 900px; 
	margin: 0 auto; 
}
</style>
	 
	  <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body bgcolor = "E3DAD8" >
  <hr/>
  <div id="wrap">
  <h1> Login Required </h1>
  <p>You must log in here to access this site. If you are
     not a registered user, register here for instant access!</p>
  <p><form method="post" action="login.php" align="center"> 
    User ID: <input type="text" name="uid" size="8" /><br />
    Password: <input type="password" name="pwd" SIZE="8" /><br />
    <input type="submit" value="Log in" />
  </form></p>
  
  <br>
  <br>
  <br>
  <hr>
<h3>New User Registration Form</h3>

  <p><font color="orangered" size="+1"><tt><b>*</b></tt></font> indicates a required field</p>

  <form method="post" id=signup action="signup.php" align="center">

    <table border="0" cellpadding="0" cellspacing="5" align="center">

      <tr>

        <td align="right">

          <p>User ID</p>

        </td>

        <td>

          <input name="newid" type="text" maxlength="100" size="25" />

         <font color="orangered" size="+1"><tt><b>*</b></tt></font>

       </td>

    </tr>

    <tr>

      <td align="right">

        <p>Full Name</p>

      </td>

      <td>

        <input name="newname" type="text" maxlength="100" size="25" />

        <font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>

    </tr>

    <tr>

      <td align="right">

        <p>E-Mail Address</p>

      </td>

      <td>

        <input name="newemail" type="text" maxlength="100" size="25" />

        <font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>

    </tr>

    <tr valign="top">

      <td align="right">

        Password

      </td>

      <td>

        <input type="pass" name="pass" maxlength="15"/>
		<font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>

    </tr>
	<tr>

      <td align="right">

        <p>Institute name</p>

      </td>

      <td>

        <input name="inname" type="text" maxlength="100" size="25" />

        <font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>

    </tr>
	<tr>

      <td align="right">

        <p>Gender</p>

      </td>

      <td>

         <input type="radio" name="gender" value="male" checked> Male</td>
		 <td>
  <input type="radio" name="gender" value="female"> Female

        <font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>

    </tr>
	<tr>

      <td align="right">

        <p>Room NO</p>

      </td>

      <td>

        <input name="room" type="text" maxlength="100" size="25" />

        <font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>

    </tr>

    <tr>

      <td align="right" colspan="2">

        <hr noshade="noshade" />

        <input type="reset" value="Reset Form" />

        <input type="submit" name="submitok" value="   OK   " />

      </td>


    </tr>

  </table>

</form>
</div>
</body>
  </html>
