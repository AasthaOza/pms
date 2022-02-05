<?php
session_start();
if(empty($_SESSION['email']))
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
		background-image:url(background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
   
  #robot{
    font-family: 'Bebas Neue', cursive;
  }

</style>
<title>Project Management System</title>
</head>
<div>
<body>
<table width="100%"  cellspacing="00" cellpadding="00">
  <tr bgcolor="purple">
    <th width="7%" scope="col">&nbsp;</th>
    <th width="12%" scope="col"><img src="logo.png" alt="LOGO"/></th>
    <th width="62%" scope="col"><font id="robot" size="8" color="White">Project Managenent System</font></th>
    <th width="13%" scope="col"><font size="5" color="White">&nbsp;</font></th>
    <th width="6%" scope="col">&nbsp;</th>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
       <div id='cssmenu' align="center">
<ul>
   <li><a href="faculty.php"><span>Registration Guide</span></a></li>
   <li><a href="student.php"><span>Registration Student</span></a></li>
   <li><a href="coordinator.php"><span>Registration Coordinator</span></a></li>
   <li class='last'><a href="hod.php"><span>Registration HOD</span></a></li>
</ul>
</div>

  </tr>
  </table>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><br/><br/><div style="width:30%;background-color:rgb(149, 186, 255);margin-left:35%;margin-top:70px; border-radius: 10px;">
    	<br><br>
                <form name="login" action="chk.php" method="post">
                    
        <table width="100%"  cellspacing="02" cellpadding="05">
  <tr>
      <th colspan="2" scope="col"><font size="6">LOGIN</font></th>
    </tr>
  <tr>
      <td align="right"><font size="5">Login ID&nbsp;:&nbsp;</font></td>
    <td><input style="height: 20px; font-size: 15px;" type="text" name="id"/><br/>
    </td>
  </tr>
  <tr>
      <td align="right"><font size="5">Password&nbsp;:&nbsp;</font></td>
    <td><input style="height: 20px; font-size: 15px;" type="password" name="pass" /></td>
  </tr>
  <tr>
      <td align="right"><font size="5">Login_As&nbsp;:&nbsp;</font></td>
    <td>
        <select name="role" style="width: 13em; height: 2em; font-size: 15px;">
        <option value="Admin">HOD</option>
        <option value="coordinator">Coordinator</option>
        <option value="Faculty">Guide</option>
        <option value="Student">Student</option>         
        </select>
      </td>
  </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" style="width: 4em;  height: 2em; font-size: 20px;" name="register" value="Submit" /></td>
            </tr>
</table> 

        <br/>
        &nbsp;
        </form>
    	</div>
     </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</div>
    
</html>

<?php
}
else
{
header("location:Admin.php");
}

?>