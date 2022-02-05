<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

if(isset($_POST['bppf'])){
if (isset($_FILES['ppf']))
{
    $file= $_FILES['ppf'];
    //file properties
    $file_name=$file['name'];
    $file_temp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];
    // work out the extension
    $file_ext = explode('.', $file_name);
    $file_ext=  strtolower(end($file_ext));
    $allowed= array('docx','doc','txt','pdf');
    
    if(in_array($file_ext, $allowed))
    {
        if($file_error===0)
        {
            if($file_size<=9999999999)
            {
                $file_name_new=uniqid('',TRUE).'.'.$file_ext;
                $file_destination='../ppf/'.$file_name_new;
                if(move_uploaded_file($file_temp, $file_destination))
                {
                    //echo $file_destination;
                    include '../connection.php';
                    $sql = "UPDATE project SET ppf='$file_name' WHERE s_id='$user'";
                    mysqli_query($conn, $sql);
                    $conn->close();
                    header('Location:project.php'); 
                }
            }
        }
    }
}
}


    elseif(isset($_POST['bpsf']))
 {
if (isset($_FILES['psf']))
{
    $file= $_FILES['psf'];
    //file properties
    $file_name=$file['name'];
    $file_temp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];
    // work out the extension
    $file_ext = explode('.', $file_name);
    $file_ext=  strtolower(end($file_ext));
    $allowed= array('docx','doc','txt','pdf');
    
    if(in_array($file_ext, $allowed))
    {
        if($file_error===0)
        {
            if($file_size<=9999999999)
            {
                $file_name_new=uniqid('',TRUE).'.'.$file_ext;
                $file_destination='../psf/'.$file_name_new;
                if(move_uploaded_file($file_temp, $file_destination))
                {
                    //echo $file_destination;
                    include '../connection.php';
                    $sql = "UPDATE project SET psf='$file_name' WHERE s_id='$user'";
                    mysqli_query($conn, $sql);
                    $conn->close();
                    header('Location:project.php'); 
                }
            }
        }
    }
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
 
}
elseif($role=="Faculty")    
{
    header('Location:../Admin.php');
?>
    
 <?php
}
else   
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
    echo "<br/>";
    print $user;
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
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
<?php
}
?>
</table>
<p>
  <?php
}
?>
    
    
</p>

<div style="background-color:rgb(149, 186, 255);  border-radius: 10px; width: 70%; margin-left: 15%; margin-top: 0px; ">
    <br/><br /><br />
<form method="post" action="project.php" enctype="multipart/form-data">
    
<table width="100%" border="0" cellspacing="05" cellpadding="05">
  <tr>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="37%" scope="col">&nbsp;</th>
    <th width="37%" scope="col">&nbsp;</th>
    <th width="13%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"><div style="background-color: rgb(74, 99, 241); border-radius: 10px;"><br/><h3>Project  Proposal</h3><br /><input type="file" name="ppf"/><br/><br/><input type="submit" name="bppf" value="upload"/><br/><br/></div></td>
    <td align="center"><div style="background-color: rgb(74, 99, 241); border-radius: 10px;"><br/><h3>Project  Specification</h3><br /><input type="file" name="psf"/><br/><br/><input type="submit" name="bpsf" value="upload"/><br/><br/></div></td>
    <td>&nbsp;</td>
  </tr>
</form>
</table>
    <br /><br />
<form method="post" action="project.php"> 
    <div style="background-color:rgb(74, 99, 241); border-radius: 10px; width: 30%; margin-left: 35%">
        <table align="center">
    <tr>
    <td>&nbsp;<br/><br/></td>
    <?php
    if(isset ($_POST['feedback']))
{
    include '../connection.php';
                    $sql1="select * from project where s_id ='$user' ";
                    $rec=mysqli_query($conn, $sql1);
                    
                    while($std=mysqli_fetch_assoc($rec))
                    {
                        ?>
    
    <td colspan="2" align="center"><textarea name="feedback" rows="5" cols="30" placeholder="FEEDBACK"><?php echo $std['remark'];?></textarea> </td>  <td></td> </tr>
                      <?php 
                    }
}?>
    <tr> 
        <td></td>
        <td colspan="2" align="center"><input type="submit" name="feedback" value="Get Feedback"/><br/><br/></td>
    <td>&nbsp;</td>
  </tr></form>
  
</table>
   </div>       </body><br /><br /> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body></div></html>
