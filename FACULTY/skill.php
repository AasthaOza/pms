<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];


include '../connection.php';
if(isset($_POST['update']))
{
           $domain=$_POST['domain'];
           $research=$_POST['research']; 
           $others=$_POST['others'];
           
           if (!empty($domain)|| !empty($research)||!empty($others))
           {
              
            $sql= "UPDATE `pmas`.`guide` SET `domain` = '$domain', `research` = '$research', `others` = '$others' WHERE `guide`.`f_id` = '$user';";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:skill.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:skill.php');
        }  
}



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
</style>
<title>Project Management System</title>
</head>
<div>
    <body>
<?php
   header('Location:../Admin.php');
   ?>
 <?php
}
elseif($role=="Faculty")    
{
?>
        <!DOCTYPE html PUBLIC>
<html>
<head>
  <link rel="stylesheet" href="styles.css"> 
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
    echo "<br/>";
    print $user;
    ?>
        </font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    
    <div id='cssmenu' align="center">
<ul>
   <li class="active" ><a href="skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="view.php"><span>View</span></a></li>
   <li><a href="mail.php"><span>Notification</span></a></li>
   <li><a href="meeting.php"><span>Meeting</span></a></li>
   <!--<li><a href="report.php"><span>Reports</span></a></li>-->
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
</div>


  </tr>
  </table>
      <form action="skill.php" method="post">
          <div style="background-color:rgb(149, 186, 255); width:40%; margin-left:30%; border-radius: 10px; margin-top:100px;">
          
              <br/>
              <table   cellspacing="05" cellpadding="05" align="center" width="100%">
    <tr>
      <td>&nbsp;</td>
      <td align="right"><font size="5">Domain : </font></td>
      <td><input id="in" type="text" name="domain"/><font color="red">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><font size="5">Department : </font></td>
      <td><input id="in" type="text" name="research"/><font color="red">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><font size="5">Other Skill (s) if any : </font></td>
      <td><input id="in" type="text" name="others"/></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
        <td colspan="4" align="center"><input id="bt" type="submit" name="update" value="Update" /></td>
    </tr>
  </table>
          </div>
  </form>
 <?php
}
else   
{
?>
    <?php
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
    
    
    
  </p>
  <p>&nbsp;</p>
    </body>
