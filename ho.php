<?php
    include 'connection.php';
        if(isset($_POST['add']))
        {
           $id=$_POST['id']; 
           $name=$_POST['honame'];
           $email=$_POST['hoemail'];
           $phone=$_POST['hophone'];
           $pass=$_POST['hopass']; 
           $qualification=$_POST['hoqulification'];
           
           
          if (!empty($id)|| !empty($name)||!empty($email)||!empty($phone)||!empty($pass)||!empty($qualification))
           {
              
            $sql= "INSERT INTO `pmas`.`admin` (`id`, `name`, `email`, `phone`, `password`, `qualification`) VALUES ('$id', '$name', '$email', '$phone', '$pass', '$qualification');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:hod.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:hod.php');
        }       
                  
        }
 
?>
    
