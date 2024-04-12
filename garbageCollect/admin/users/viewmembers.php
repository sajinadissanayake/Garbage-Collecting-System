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
      <h1>GTF Members</h1>
      </div>
    <thead>
      <tr>
        <td style="width: 45px;">ID</td>
        <td>First Name</td>
         <td>Last Name</td>
         <td>Email</td>
         <td>Usertype</td>
         <td>Username</td>
      </tr>
</thead>

      <?php
      require 'connection.php';
      $rows = mysqli_query($conn, "SELECT * FROM `user` WHERE usertype ='Member'");
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
        
      </tr>
      <?php endforeach; ?>
    </table>

</body>
</html>