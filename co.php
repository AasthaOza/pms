<?php
    include 'connection.php';
        if(isset($_POST['add']))
        {
           $id=$_POST['id']; 
           $name=$_POST['coname'];
           $email=$_POST['coemail'];
           $phone=$_POST['cophone'];
           $pass=$_POST['copass']; 
           $qualification=$_POST['coqulification'];
           
           
          if (!empty($id)|| !empty($name)||!empty($email)||!empty($phone)||!empty($pass)||!empty($qualification))
           {
              
            $sql= "INSERT INTO `pmas`.`coordinator` (`id`, `name`, `email`, `phone`, `password`, `qualification`) VALUES ('$id', '$name', '$email', '$phone', '$pass', '$qualification');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:coordinator.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:coordinator.php');
        }       
                  
        }
 
?>
    
