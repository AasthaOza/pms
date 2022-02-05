<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

include '../connection.php';


if (isset($_POST['submit']))
{
            $to=$_POST['student']; 
           $msg=$_POST['msg'];
           
           
          if (!empty($to))
           {
              
            $sql= "INSERT INTO `pmas`.`notification` (`n_id`, `s_id`, `f_id`, `msg`) VALUES ('', '$to', '$user', '$msg');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:mail.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:mail.php');
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
    header("location:../Admin.php?image=image.php");
?>


 <?php
}
elseif($role=="Faculty")    
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
    ?>
        </font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <div id='cssmenu' align="center">
<ul>
   <li><a href="skill.php"><span>Skill Matrix</span></a></li>
   <li><a href="view.php"><span>View</span></a></li>
   <li class="active" ><a href="mail.php"><span>Notification</span></a></li>
   <li><a href="meeting.php"><span>Meeting</span></a></li>
  <!-- <li><a href="report.php"><span>Reports</span></a></li>-->
   <li class='last'><a href="../logout.php"><span>Logout</span></a></li>
</ul>
</div>
  </tr>
  </table>
    <bt/><br/><br/>
      <form method="post" action="mail.php">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr style="background-color:rgb(149, 186, 255);">   <th><h4>&nbsp;</h4></th>
            <th><input  style="width: 5em;  height: 2em; font-size: 15px;" type="submit" value="Write" name="compose"/></th>
                <th>&nbsp;</th>
                <th><input style="width: 8em;  height: 2em; font-size: 15px;" type="submit" value="Notification" name="inbox"/></th>
                <th>&nbsp;</th>
                <th><input style="width: 8em;  height: 2em; font-size: 15px;" type="submit" value="Sent Notification" name="sent"/></th>
                <th>&nbsp;</th>
        </tr>
                <?php
                
                if (isset($_POST['compose']))
                {
                    $sql1="select * from project where s_id ='$user' ";
                    $rec=mysqli_query($conn, $sql1);
                    $std=mysqli_fetch_assoc($rec);
                    ?>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td colspan="3" align="center">
                        <br/><br/>
                        <div style="background-color:rgb(149, 186, 255); width: 40%; border-radius: 10px; margin-left: 5%; border: black;">
                        <br/><br/>
                        <font size="5"> To : &nbsp;&nbsp;</font> 
                        <?php
                        include '../connection.php';
                         $sql="select s_id from project where f_id='$user';";
                         $result=  mysqli_query($conn, $sql)
                         ?> <select name="student" style="width: 10em; height: 2em; font-size: 15px;">
                        <option >Choose From Supervisory</option>
                        <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $category= $row['s_id'];
                            ?>
                 <option selected="selected" value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select> 
                        <br/><br/>
                        <font size="5">  From : </font><input id="in" type="text" name="from" value="<?php echo $user;?>" readonly/><br/><br/>
                        <textarea  name="msg" cols="35" rows="5" placeholder="Message" ></textarea><br/><br/>
                        <input id="bt" type="submit" value="Send" name="submit"/>
                        <br/><br/>
                        </div>
                    </td>
                    <td colspan="2">&nbsp;</td>
                </tr>
                 <?php
                }
                elseif (isset($_POST['inbox'])) 
                    {
                        ?>  
                        
                            <table width="40%" cellpadding="05" cellspacing="01" border="0" align="center" bgcolor="rrgb(149, 186, 255">  

                    <?php
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<br/>";
                       echo "<tr>";
                    echo "<th>"."FROM"."</th>";
                    echo "<th>" ?> &nbsp; <?php "</th>";
                    echo "<th>"."MESSAGE"."</th>";
                    echo "</tr>";
                        $sql1="select * from st_noti where f_id ='$user'";
                        $rec=mysqli_query($conn, $sql1);
                        
                        echo "<tr>";
                        while ($std= mysqli_fetch_assoc($rec))
                        {
                           if ($std['from']="supervisor")
                            {
                               ?> <tr bgcolor="beige" align="center"><?php
                            //echo "<tr>";
                            echo "<td>".$std['s_id']."<td/>";
                            echo "<td>".$std['mag']."<td/>"; 
                            ?>  </tr> <?php 
                            //echo "<tr/>";
                            }
                        }
                        
                        ?> </table> <?php
                         
                    }
                    
                    elseif (isset($_POST['sent'])) 
                    {
                        ?>  <table width="40%" cellpadding="0" cellspacing="2" border="0" align="center" bgcolor="rrgb(149, 186, 255">  

                    <?php
                    
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<tr>";
                    echo "<th>"."TO"."</th>";
                    echo "<th>" ?> &nbsp; <?php "</th>";
                    echo "<th>"."MESSAGE"."</th>";
                    echo "</>";
                        $sql1="select * from  notification where f_id ='$user' ";
                        $rec=mysqli_query($conn, $sql1);
                        
                        echo "<tr>";
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                           ?> <tr bgcolor="beige" align="center"><?php
                            echo "<td>".$std['s_id']."<td/>";
                            echo "<td>".$std['msg']."<td/>"; 
                            ?>  </tr> <?php 
                        }
                        //echo "<tr/>";
                        ?> </table> <?php
                         
                    }
                
                ?>
        
    </table>
</form>
 <?php
}
else   
{
    header("location:../Admin.php?image=image.php");
?>
      
<?php
}
?>
</table>
<p>
  <?php
}
?>
   

    