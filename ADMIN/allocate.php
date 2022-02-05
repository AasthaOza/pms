<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];
error_reporting(0);


include './connection.php';


if(isset($_POST['allocate']))
{
           $sid=$_POST['sid']; 
           $fid=$_POST['faid'];
           $proid=$_POST['projectid'];
                      
           if (!empty($sid)|| !empty($fid)||!empty($proid))
           {
              
            $sql= "INSERT INTO `pmas`.`project` (`p_id`, `name`, `domain`, `s_id`, `f_id`, `ppf`, `psf`, `remark`) VALUES ('$proid', '', '', '$sid', '$fid', '', '', '');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:allocate.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:allocate.php');
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
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="../css.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="01" cellpadding="01">
  	<tr>
    <div id='cssmenu' align="center">
<ul>
   <li><a href="stsearch.php"><span>Search Student</span></a></li>
   <li><a href="fa_search.php"><span>Search Guide</span></a></li>
   <li class="active"><a href="allocate.php"><span>Allocate</span></a></li>
   <li><a href="skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="report.php"><span>Reports</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
    </tr>
</table>
    <form method="post" action="allocate.php">
      <br/><br/>
      <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
           <table align="center"  width="100%">
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td align="right"><br/><font size="5">Student ID&nbsp;:&nbsp;</font></td>
    <td>
        <br/><br/>
        <?php
            include '../connection.php';
             $sql="select s_id from student";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px;">
                 <option >Student</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option selected="selected" value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select> <br/><br/>
    </td>
    <td rowspan="2">&nbsp;</td>
               </tr>
       </div>
       <?php
       if (isset($_POST['chk']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from project where s_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>
  <tr>
      <td colspan="2" align="center"><input type="submit" style="width: 10em;  height: 2em; font-size: 15px;" name="chk" value="Search" /> <br/><br/>  </td>
    </tr>
       </table>
       </div>
           <br/>
           <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
           <table align="center"  width="100%" cellspacing="05" cellpadding="05">
       <tr>
           <br/><br/>
           <td>&nbsp; <br/></td>
           <td align="right"><br/><font size="5">Student ID&nbsp;:&nbsp;</font></td>
           <td><br/><input  id="in"type="text" name="sid" value="<?php echo $row['s_id'];?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Guide ID&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="faid" value="<?php echo $row['f_id'];?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Project ID&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="projectid" value=""/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td colspan="2"><input id="bt" type="submit" name="allocate" value="Update"/>    				
    <td>&nbsp;</td>
  </tr>
</table>
      </div>
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
    <link rel="stylesheet" type="text/css" href="../css.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="01" cellpadding="01">
  	<tr>
    <div id='cssmenu' align="center">
<ul>
   <li class="active"><a href="allocate.php"><span>Allocate</span></a></li>
   <li><a href="skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="report.php"><span>Reports</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
    </tr>
</table>
    <form method="post" action="allocate.php">
      <br/><br/>
      <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
           <table align="center"  width="100%">
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td align="right"><br/><font size="5">Student ID&nbsp;:&nbsp;</font></td>
    <td>
        <br/><br/>
        <?php
            include '../connection.php';
             $sql="select s_id from student";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px;">
                 <option >Student</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option selected="selected" value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select> <br/><br/>
    </td>
    <td rowspan="2">&nbsp;</td>
               </tr>
       </div>
       <?php
       if (isset($_POST['chk']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from project where s_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>
  <tr>
      <td colspan="2" align="center"><input type="submit" style="width: 10em;  height: 2em; font-size: 15px;" name="chk" value="Search" /> <br/><br/>  </td>
    </tr>
       </table>
       </div>
           <br/>
           <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
           <table align="center"  width="100%" cellspacing="05" cellpadding="05">
       <tr>
           <br/><br/>
           <td>&nbsp; <br/></td>
           <td align="right"><br/><font size="5">Student ID&nbsp;:&nbsp;</font></td>
           <td><br/><input  id="in"type="text" name="sid" value="<?php echo $row['s_id'];?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Guide ID&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="faid" value="<?php echo $row['f_id'];?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Project ID&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="projectid" value=""/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td colspan="2"><input id="bt" type="submit" name="allocate" value="Update" />    				
    <td>&nbsp;</td>
  </tr>
</table>
      </div>
  </form>
 <?php
}
elseif($role=="Faculty")    
{
?>
    <?php
   header('Location:../Admin.php');
   ?>
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
<?php
}
?>
      


