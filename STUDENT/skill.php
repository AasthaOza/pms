<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

include '../connection.php';

if(isset($_POST['allocate']))
        {
           $id=$_POST['facultyid'];  
            $sql= "INSERT INTO `pmas`.`request` (`request_id`, `s_id`, `f_id`) VALUES ('', '$user', '$id');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:skill.php');  
                  
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
        a link{
            text-decoration: none;
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
   <li><a href="project.php"><span>Project</span></a></li>
   <li class="active"><a href="skill.php"><span>View Skill Matrix</span></a></li>
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
    
    
    <div style="background-color:rgb(149, 186, 255); width: 50%; border-radius: 10px;  margin-left: 25%; margin-top: 0px; ">
        <br/><br/>
    <form method="post" action="skill.php">
        <table style="background-color: rgb(74, 99, 241); border-radius: 10px;" align="center" width="30%">
        <tr>
            
            <td align="center">
              <br/><br/>  
    <?php
            include '../connection.php';
             $sql="select f_id from guide";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="guide">
                 <option selected="selected"><h3>Supervisors</h3></option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['f_id'];
                     ?>
                 <option selected="selected" value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select>  <br/><br/>
        <input type="submit" name="asses" value="View Skill Matrix"/><br/><br/>
            </td>
            
        </tr>
    </table>    
         </form>
    
    
    
    <br/><br/><br/>
    
    
    
    
    <form method="post" action="skill.php">
       <div style="background-color: rgb(74, 99, 241); border-radius: 10px; width: 60%; margin-left: 20%;"> 
    <table width="50%" cellpadding="5" cellspacing="5" border="0" align="center">
    <?php
            if (isset($_POST['asses']))
            {   
                $fid=$_POST['guide'];          
                echo "<tr>";?>
                <td>Faculty ID</td>
                <td><input type="text" name="facultyid"  readonly value="<?php echo $fid;?>" readonly</td>
                <?php
                echo "</tr>";
                
                $sql1="select * from guide where f_id ='$fid' ";
                $rec=mysqli_query($conn, $sql1);
                while ($std= mysqli_fetch_assoc($rec))
                {
                echo "<tr>";
                echo "<td>"."Name"."</td>";
                echo "<td>"?> <input type="text" name="stid" readonly value="<?php echo $std['name'];?>"/> <?php "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>"."Qualification"."</td>";
                echo "<td>"?> <input type="text" name="faqu" readonly value="<?php echo $std['qualification'];?>"/> <?php "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>"."Domain"."</td>";
                echo "<td>"?> <input type="text" name="fad" readonly value="<?php echo $std['domain'];?>"/> <?php "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>"."Research"."</td>";
                echo "<td>"?> <input type="text" name="far" readonly value="<?php echo $std['research'];?>"/> <?php "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>"."Others"."</td>";
                echo "<td>"?> <input type="text" name="fao" readonly value="<?php echo $std['others'];?>"/> <?php "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td></td>";
                echo "<td>"?> <input type="submit" name="allocate" readonly value="Request For Allocate"/> <?php "</td>";
                echo "</tr>";
                
                }
                
               
            }
    ?>
                
    </table>
        </div>
    </form>
    <br/><br/><br/>
    </div>