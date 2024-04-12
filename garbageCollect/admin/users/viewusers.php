<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view1.css">
</head>
<body>

    <table>
      <div class="tablehead">
      <h1>Green Captains</h1>
      </div>
    <thead>
      <tr>
        <td style="width: 45px;">ID</td>
        <td>First Name</td>
         <td>Last Name</td>
         <td>Email</td>
         <td>Usertype</td>
         <td>Username</td>
         <td>Actions</td>
      </tr>
</thead>

      <?php
      require 'connection.php';
      $rows = mysqli_query($conn, "SELECT * FROM `user` WHERE usertype ='captain'");
      $i = 1;

      foreach($rows as $row) :
      ?>
      <tr>
      <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["firstname"]; ?></td>
        <td><?php echo $row["lastname"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row["usertype"]; ?></td>
         <td><?php echo $row["username"]; ?></td>


        <td><a href="update.php?id=<?php echo $row['id'] ?>">Update</a>
             &nbsp &nbsp
        <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
        </td>

        
      </tr>
      <?php endforeach; ?>
    </table>



    <table>
      <div class="tablehead">
      <h1>Collecting Staff</h1>
      </div>
    <thead>
      <tr>
        <td style="width: 45px;">ID</td>
        <td>First Name</td>
         <td>Last Name</td>
        <td>Email</td>
         <td>Usertype</td>
         <td>Username</td>
         <td>Actions</td>
      </tr>
</thead>

      <?php
      require 'connection.php';
      $rows = mysqli_query($conn, "SELECT * FROM `user` WHERE usertype ='staff'");
      $i = 1;

      foreach($rows as $row) :
      ?>
      <tr>
      <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["firstname"]; ?></td>
        <td><?php echo $row["lastname"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row["usertype"]; ?></td>
         <td><?php echo $row["username"]; ?></td>

        <td><a href="http://localhost/PROJECTS/garbageCollect/admin/users/update.php?id=<?php echo $row['id'] ?>">Update</a>
             &nbsp &nbsp
        <a href="http://localhost/PROJECTS/garbageCollect/admin/users/delete.php?id=<?php echo $row['id'] ?>">Delete</a>
        </td>

        
      </tr>
      <?php endforeach; ?>
    </table>

</body>
</html>


