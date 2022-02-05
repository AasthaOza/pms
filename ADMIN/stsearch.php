<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];
error_reporting(0);


include './connection.php';

if(isset($_POST['update']))
{
            $id=$_POST['sid']; 
           $name=$_POST['stname'];
           $email=$_POST['stemail'];
           $phone=$_POST['stphone'];
           $pass=$_POST['stpass']; 
           $year=$_POST['styear'];
           $stream=$_POST['stream'];
           
           if (!empty($id)|| !empty($name)||!empty($email)||!empty($phone)||!empty($pass)||!empty($year)||$stream!="Select")
           {
              
            $sql= "UPDATE `pmas`.`student` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `password` = '$pass', `year` = '$year', `stream` = '$stream' WHERE `student`.`s_id` = '$id';";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:stsearch.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:stsearch.php');
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
   <li class="active"><a href="stsearch.php"><span>Search Student</span></a></li>
   <li><a href="fa_search.php"><span>Search Guide</span></a></li>
   <li><a href="allocate.php"><span>Allocate</span></a></li>
   <li><a href="skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="report.php"><span>Reports</span></a></li>
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
</div>

    
    </tr>
</table>
    
    <form method="post" action="stsearch.php">
      <div>
   <table width="100%"  cellspacing="05" cellpadding="05">
  <tr>
    <th width="7%" scope="col">&nbsp;</th>
    <th width="43%" scope="col">&nbsp;</th>
    <th width="44%" scope="col">&nbsp;</th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
   </table>
          <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
              <table align="center" width="100%" cellspacing="00" cellpadding="05" >
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Student ID&nbsp;:&nbsp;</font> </td>
    <td>
        <?php
            include '../connection.php';
             $sql="select s_id from student";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px; ">
                 <option selected="selected" >Student</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option  value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select> 
    </td>
  </tr>
    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="search" value="Search" id="bt" />
    </td>
    <td>&nbsp;</td>
  </tr>
          </table>
          </div>
          <br/><br/>
          <div style="background-color: rgb(149, 186, 255); margin-left: 33%; border-radius: 10px; width: 35%">
              <br/>
          <table align="center"  width="100%" cellspacing="00" cellpadding="03">
       <?php
       if (isset($_POST['search']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from student where s_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>
       
       <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Student ID&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="sid" value="<?php echo $row['s_id'];?>"/></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="stname" value="<?php echo $row['name'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Email&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="email" name="stemail" value="<?php echo $row['email'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Phone&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="stphone" value="<?php echo $row['phone'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Password &nbsp;:&nbsp;</font></td>
    <td><input id="in" type="password" name="stpass" value="<?php echo $row['password'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Year&nbsp;:&nbsp;</font></td>
    <td><input  id="in" type="text" name="styear" value="<?php echo $row['year'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Stream&nbsp;: &nbsp;</font></td>
    <td><select name="stream" style="width: 13em; height: 2em; font-size: 15px; ">
         <option value="Selcet">Select</option>
         <option value="BCS" <?php if($row['stream']=='BCS') echo 'selected="selected"'; ?>>B.Sc(Computer Science)</option>
        <option value="MCS" <?php if($row['stream']=='MCS') echo 'selected="selected"'; ?>>M.sc(Computers Science)</option>
        <option value="BIT" <?php if($row['stream']=='BIT') echo 'selected="selected"'; ?>>B.sc(IT)</option> 
        <option value="MIT" <?php if($row['stream']=='MIT') echo 'selected="selected"'; ?>>M.sc(IT)</option>          
        </select></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
    <td>&nbsp;</td>
    <td colspan="2">
        <input type="submit" name="update" value="Update" id="bt"/>
    				
    <td>&nbsp;</td>
  </tr>
</table><br/>
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
  


