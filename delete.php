<?php
include 'connect.php';

if (isset($_GET['deleteid'])){
   $id=$_GET['deleteid'];
   $sql="delete from `crud` where id=$id";
   $result=mysqli_query($con,$sql);
   if($result){
      // echo "deleted succcessfully";
      header('Location: display.php');  
      exit(); // Always use exit() after header redirects
        
   }
   else{
      die("Connection failed: " . $con->connect_error);
   }
}

?>