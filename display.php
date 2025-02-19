<?php
include 'connect.php'; // Ensure this file contains a valid database connection

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Display Records</title>
   <!-- Bootstrap CDN (Include if needed) -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container my-5">
      <button class="btn btn-primary my-3">
         <a href="user.php" class="text-light">Add User</a>
      </button>
      <table class="table table-bordered">
         <thead>
            <tr>
               <th scope="col">Sr.No.</th>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Mobile</th>
               <th scope="col">Password</th>
               <th scope="col">Operations</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($con, $sql);

            if ($result) {
               while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $email = $row['email'];
                  $mobile = $row['mobile'];
                  $password = $row['password'];

                  echo '<tr>
                     <th scope="row">'.$id.'</th>
                     <td>'.$name.'</td>
                     <td>'.$email.'</td>
                     <td>'.$mobile.'</td>
                     <td>'.$password.'</td>
                     <td>
                     <button  class="btn btn-primary" ><a href="update.php?
                     updateid='.$id.'"class="text-light">Update</a></button>

                     <button  class="btn btn-danger" ><a href="delete.php?
                     deleteid='.$id.'" class="text-light">Delete</a></button>
                     </td>
                  
                  </tr>';
               }
            }
            ?>

          
         </tbody>
      </table>
   </div>
</body>
</html>
