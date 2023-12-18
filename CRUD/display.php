<?php
   require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <title>Update Profile</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="add.php" class="text-light">Add user</a></button>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
      <a href="index.php">Back</a>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * FROM `tb_user`";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $username=$row['username'];
            $email=$row['email'];
            $password=$row['password'];
            echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$username.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                    <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
                  </tr>';
        }
    }

    ?>
    
  </tbody>
</table>
    
</body>
</html>
