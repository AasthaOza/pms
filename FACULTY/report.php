<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];
if(empty($_SESSION['Email']))
{
header("location:index.php");
}
else
{
if($role=="Admin")
{
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<style>
	body
	{
		background-image:url(background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
  .topnav {
  overflow: hidden;
  background-color: rgb(13, 129, 224);
  font-family: 'Roboto Condensed', sans-serif;
  }

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  }

.topnav a:hover {
  background-color: #ddd;
  color: black;
  }

.topnav a.active {
  background-color: #4CAF50;
  color: white;
  }
</style>
<title>Project Management System</title>
</head>
<div>
<body>
    <table width="100%"  border="0"cellspacing="00" cellpadding="00">
    <tr bgcolor="rgb(13, 129, 224)">
    <th width="7%" scope="col">&nbsp;</th>
    <th width="12%" scope="col"><img src="logo.png" alt="LOGO"/></th>
    <th width="62%" scope="col"><font id="robot" size="8" color="White">Project   Managenent  System</font></th>
    <th width="13%" scope="col"><font size="5" color="White">
	<?php
    print $role;
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
 <?php
}
elseif($role=="Faculty")    
{
?>
    <!DOCTYPE html>




<html>
<head> 
  <link rel="stylesheet" href="styles.css">
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
  .topnav {
  overflow: hidden;
  background-color: rgb(13, 129, 224);
  font-family: 'Roboto Condensed', sans-serif;
  }

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  }

.topnav a:hover {
  background-color: #ddd;
  color: black;
  }

.topnav a.active {
  background-color: #4CAF50;
  color: white;
  }
</style>
<title>Project Management System</title>
</head>
<div>
<body>
    <table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <<tr bgcolor="purple">
    <th width="7%" scope="col">&nbsp;</th>
    <th width="12%" scope="col"><img src="logo.png" alt="LOGO"/></th>
    <th width="62%" scope="col"><font id="robot" size="8" color="White">Project   Managenent  System</font></th>
    <th width="13%" scope="col"><font size="5" color="White">
    <?php
    print $role;
    echo "<br/>";
    print $user;
    ?>
        </font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
    
      <tr>
      
      <div id='cssmenu' align="center">
<ul>
   <li><a href="skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="view.php"><span>View</span></a></li>
   <li ><a href="mail.php"><span>Notification</span></a></li>
   <li><a href="meeting.php"><span>Meeting</span></a></li>
   <li class="active" ><a href="report.php"><span>Reports</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
      </div>
      </tr>
 <?php
}
else   
{
?>
      <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
	body
	{
		background-image:url(background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
  .topnav {
  overflow: hidden;
  background-color: rgb(13, 129, 224);
  font-family: 'Roboto Condensed', sans-serif;
  }

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  }

.topnav a:hover {
  background-color: #ddd;
  color: black;
  }

  .topnav a.active {
  background-color: #4CAF50;
  color: white;
  }
</style>
<title> Project Management System</title>
</head>
<div>
<body>
    <table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
    <th width="74" scope="col">&nbsp;</th>
    <th width="164" scope="col"><img src="images/logo1.png" alt="LOGO"></th>
    <th width="646" scope="col"><font size="8" color="White">Project Managenent System</font></th>
    <th width="140" scope="col"><font color="White" size="5">
	<?php
    print $role;
    echo "<br/>";
    print $user;
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
    <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="rgb(149, 186, 255)">
    
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
    <th width="13%" scope="col"><a href="STUDENT/project.php">Project</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="STUDENT/skill.php">View Skill Matrix</a></th>
    <th width="11%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="STUDENT/mail.php">Mail</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
<?php
}
?>
</table>
<p>
  <?php
}
?>
    
    
</p>
<p>&nbsp;</p>
  </table>
</table></body>