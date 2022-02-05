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
if($role=="Student")
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
		background-image:url(../background.png);
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
    <tr bgcolor="purple">
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
<tr>
<div id='cssmenu' align="center">
<ul>
   <li><a href="project.php"><span>Project</span></a></li>
   <li><a href="skill.php"><span>View Skill Matrix</span></a></li>
   <li class="active"><a href="meeting.php"><span>Meeting</span></a></li>
   <li><a href="mail.php"><span>Notification</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
   
    </div>
    </tr>
</table>
    <br/><br/><br/>
    <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 38%">
    <table  border="1" align="center" bgcolor="rrgb(149, 186, 255">
      
            <?php
                echo "<tr>";
                echo "<th>"."Meeting ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Guide ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Student ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Date"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Time"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Description"."</th>";
                echo "</tr>";
                include './connection.php';
                $sql1="select * from meeting";
                $rec=mysqli_query($conn, $sql1);
                
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                          if ($std['from']="supervisor")
                            {
                           ?> <tr bgcolor="beige" align="center"><?php
                            echo "<td>".$std['meeting_id']."<td/>";
                            echo "<td>".$std['f_id']."<td/>"; 
                            echo "<td>".$std['s_id']."<td/>"; 
                            echo "<td>".$std['date']."<td/>"; 
                            echo "<td>".$std['time']."<td/>"; 
                            echo "<td>".$std['desc']."<td/>"; 
                            ?>  </tr> <?php 
                        }
                      }
            ?>
        </table>
    </form>
 <?php
 
}
elseif($role=="coordinator")
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
		background-image:url(../background.png);
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
    <table width="100%"  border="0"cellspacing="00" cellpadding="00">
    <tr bgcolor="purple">
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
<tr>
<div id='cssmenu' align="center">
<ul>
   <li class="active"><a href="project.php"><span>Project</span></a></li>
   <li><a href="skill.php"><span>View Skill Matrix</span></a></li>
   <li><a href="meeting.php"><span>Meeting</span></a></li>
   <li><a href="mail.php"><span>Notification</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
   
    </div>
    </tr>
</table>
    <br/><br/><br/>
    <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 38%">
    <table  border="1" align="center" bgcolor="rrgb(149, 186, 255">
      
            <?php
                echo "<tr>";
                echo "<th>"."Meeting ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Guide ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Student ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Date"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Time"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Description"."</th>";
                echo "</tr>";
                include './connection.php';
                        $sql1="select * from meeting ";
                        $rec=mysqli_query($conn, $sql1);
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                           ?> <tr bgcolor="beige" align="center"><?php
                            echo "<td>".$std['meeting_id']."<td/>";
                            echo "<td>".$std['f_id']."<td/>"; 
                            echo "<td>".$std['s_id']."<td/>"; 
                            echo "<td>".$std['date']."<td/>"; 
                            echo "<td>".$std['time']."<td/>"; 
                            echo "<td>".$std['desc']."<td/>"; 
                            ?>  </tr> <?php 
                        }
            ?>
        </table>
    </form>
 <?php
 
}
elseif($role=="Faculty")    
{
    header('Location:../Admin.php'); 
?>
 <?php
}
else   
{
    header('Location:../Admin.php'); 
?>
      
<?php
}
?>
</table>
<p>
  <?php
}
?>
   