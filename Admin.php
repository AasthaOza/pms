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
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
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
    <div class="topnav">
    <!--a href="ADMIN/student.php">Add Student</a>
    <a href="ADMIN/stsearch.php">Search Student</a>
    <a href="ADMIN/faculty.php">Add Faculty</a>
    <a href="ADMIN/fa_search.php">Search Faculty</a>
    <a href="ADMIN/allocate.php">Allocate</a>
    <a href="ADMIN/skill.php">Skill Matrix</a>
    <a href="ADMIN/report.php">Reports</a>
    <a href="logout.php">Logout</a-->

    <div id='cssmenu' align="center">
<ul>
   <li><a href="ADMIN/stsearch.php"><span>Search Student</span></a></li>
   <li><a href="ADMIN/fa_search.php"><span>Search Faculty</span></a></li>
   <li><a href="ADMIN/allocate.php"><span>Allocate</span></a></li>
   <li><a href="ADMIN/skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="ADMIN/report.php"><span>Reports</span></a></li>
   <li class='last'><a href="logout.php"><span>Logout</span></a></li>
</ul>
</div>
    </div>
    </tr>
</table>
   
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
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
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
   <li><a href="ADMIN/allocate.php"><span>Allocate</span></a></li>
   <li><a href="ADMIN/skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="ADMIN/report.php"><span>Reports</span></a></li>
   <li class='last'><a href="logout.php"><span>Logout</span></a></li>
</ul>
</div>
    </tr>
</table>


<?php
}
elseif($role=="Faculty")    
{
?>
    <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
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
  .topnav {
  overflow: hidden;
  background-color: rgb(13, 129, 224);
  font-family: 'Roboto Condensed', sans-serif;
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
   <li><a href="FACULTY/skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="FACULTY/view.php"><span>View</span></a></li>
   <li><a href="FACULTY/mail.php"><span>Notification</span></a></li>
   <li><a href="FACULTY/meeting.php"><span>Meeting</span></a></li>
<!--<li><a href="FACULTY/report.php"><span>Reprots</span></a></li>-->
   <li class='last'><a href="logout.php"><span>Logout</span></a></li>
</ul>
</div>
    </tr>
       
        
  </table>
 <?php
}
else   
{
?>
     
     
     <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="styles.css">
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
    <tr bgcolor="purple">
    <th width="7%" scope="col">&nbsp;</th>
    <<th width="12%" scope="col"><img src="logo.png" alt="LOGO"/></th>
    <th width="62%" scope="col"><font id="robot" size="8" color="White">Project   Managenent  System</font></th>
    <th width="13%" scope="col"><font size="5" color="White">
	<?php
    print $role;
    echo "<br/>";
    print $user;
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>   
       
        <div id='cssmenu' align="center">
<ul>
   <li class="active"><a href="STUDENT/project.php"><span>Project</span></a></li>
   <li><a href="STUDENT/skill.php"><span>View Skill Matrix</span></a></li>
   <li><a href="STUDENT/meeting.php"><span>Meeting</span></a></li>
   <li><a href="STUDENT/mail.php"><span>Notification</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
</div>
   </tr>
      
</table>
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