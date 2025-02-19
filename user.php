<?php
include 'connect.php';
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `crud` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
   $result = mysqli_query($con, $sql);
   if ($result) {
      // echo "<div class='alert alert-success'>Data inserted successfully</div>";
      header('location:display.php');
   } else {
      die(mysqli_error($con));
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CRUD OPERATION</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container my-5">
      <h1 class="text-center">CRUD Operation</h1>
      <!-- <button class="btn btn-primary my-3">
         <a href="user.php" class="text-light">Add User</a>
      </button>
       -->
      <form method="post">
         <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
         </div>
         <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required>
         </div>
         <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" required>
         </div>
         <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" required>
         </div>
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
   </div>
</body>
</html>