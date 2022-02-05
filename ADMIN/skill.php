<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];
error_reporting(0);


include './connection.php';


 
   if (isset($_POST['view']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from guide where f_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
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
   <li><a href="allocate.php"><span>Allocate</span></a></li>
   <li class="active"><a href="skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="report.php"><span>Reports</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
    </tr>
</table>
    <br/><br/>
    <form method="post" action="skill.php">
    <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
       <table align="center"  cellspacing="05" cellpadding="05">
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Guide ID&nbsp;:&nbsp;</font>  </td>
    
    <td><?php
            include '../connection.php';
             $sql="select f_id from guide";
             $result=  mysqli_query($conn, $sql)
                     ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px;">
                 <option selected="selected">Guide</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['f_id'];
                     ?>
                 <option  value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
                     </select>
    </td></tr>
           <tr>
               <td align="center" colspan="3">
                   <input type="submit" id="bt" name="view" value="View" />  </td>
    <td>&nbsp;</td>
  </tr>
       </table>
          </div>
       <br/>
       <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
       <table align="center"  width="40%" cellspacing="05" cellpadding="05">
       <?php
       if (isset($_POST['view']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from guide where f_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>
       
       <tr>
           <br/>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Guide ID&nbsp;:&nbsp;</font></td>
    <td><br/><input id="in" type="text" readonly name="faid" value="<?php echo $row['f_id'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faname" value="<?php echo $row['name'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Qualification&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faqualification" value="<?php echo $row['qualification'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Domain&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="fadomain" value="<?php echo $row['domain'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Research&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faresearch" value="<?php echo $row['research'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Others&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faothers" value="<?php echo $row['others'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td colspan="2">   				
    <td>&nbsp;</td>
  </tr>
</table>
       </div><br/><br/>
        <br/></div>
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
   <li><a href="allocate.php"><span>Allocate</span></a></li>
   <li class="active"><a href="skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="report.php"><span>Reports</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
    </tr>
</table>
    <br/><br/>
    <form method="post" action="skill.php">
    <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
       <table align="center"  cellspacing="05" cellpadding="05">
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Guide ID&nbsp;:&nbsp;</font>  </td>
    
    <td><?php
            include '../connection.php';
             $sql="select f_id from guide";
             $result=  mysqli_query($conn, $sql)
                     ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px;">
                 <option selected="selected">Guide</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['f_id'];
                     ?>
                 <option  value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
                     </select>
    </td></tr>
           <tr>
               <td align="center" colspan="3">
                   <input type="submit" id="bt" name="view" value="View" />  </td>
    <td>&nbsp;</td>
  </tr>
       </table>
          </div>
       <br/>
       <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
       <table align="center"  width="40%" cellspacing="05" cellpadding="05">
       <?php
       if (isset($_POST['view']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from guide where f_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>
       
       <tr>
           <br/>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Guide ID&nbsp;:&nbsp;</font></td>
    <td><br/><input id="in" type="text" readonly name="faid" value="<?php echo $row['f_id'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faname" value="<?php echo $row['name'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Qualification&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faqualification" value="<?php echo $row['qualification'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Domain&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="fadomain" value="<?php echo $row['domain'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Research&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faresearch" value="<?php echo $row['research'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Others&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faothers" value="<?php echo $row['others'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td colspan="2">   				
    <td>&nbsp;</td>
  </tr>
</table>
       </div><br/><br/>
        <br/></div>
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
      


