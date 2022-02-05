<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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
</style>
<title>Project Management System</title>
</head>
<div>
<body>
<table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="purple">
    <th width="74" scope="col">&nbsp;</th>
    <th width="164" scope="col"><img src="logo.png" alt="LOGO"/></th>
    <th width="646" scope="col"><font id="robot" size="8"  color="White">Project Managenent System</font></th>
    <th width="140" scope="col"><font color="white" size="5"> hod Sign Up</font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
      <div id='cssmenu' align="center"> 
              <ul>
                 <li><a href="index.php"><span>Log in</span></a></li>
                 <li><a href="faculty.php"><span>Registration Guide</span></a></li>
                 <li><a href="student.php"><span>Registration Student</span></a></li>
                 <li ><a href="coordinator.php"><span>Registration Coordinator</span></a></li>
                 <li class="active"  class='last'><a href="hod.php"><span>Registration HOD</span></a></li>

              </ul>
       </div>


  </tr>
  </table>

    <br/><br/>
    </p> <form method="post" action="ho.php">
        <br/><br/><br/><br/>
        <div style="background-color:rgb(149, 186, 255); margin-left: 35%; border-radius: 10px; alignment-adjust: central; width: 30%">
            <table width="100%" border="0" cellspacing="00" cellpadding="05" align="center">
  <tr>
    <th width="7%" scope="col">&nbsp;</th>
    <th width="43%" scope="col">&nbsp;</th>
    <th width="44%" scope="col">&nbsp;</th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">HOD ID&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="id"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="honame"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Email&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="email" name="hoemail"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Phone&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="hophone"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
    <td align="right"><font size="5">Password &nbsp;:&nbsp;</font></td>
    <td><input type="password" id="in" name="hopass"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Qualification&nbsp;:&nbsp;</font></td>
    <td><input  id="in" type="text" name="hoqulification"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center" >
    <td>&nbsp;</td>
    <br/>
    <td colspan="2"><input type="submit"  name="add" value="Add" id="bt" />
            
    <td>&nbsp;</td>
  </tr>
            </table> <br/><br/>  </div></form>
 
 

<?php

?>
</table>
<p>
  <?php

?>
    
    

<p>&nbsp;</p>
