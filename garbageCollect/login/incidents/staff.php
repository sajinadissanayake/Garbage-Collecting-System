<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staff2.css">
    <title>STAFF PAGE</title>
</head>
<body>

    <div class="top-heading">
         <h1>Welocome To GTF Colombo Staff Page</h1>
         </div>

    <table>
      <div class="tablehead">
      <h1>Approved Incidents</h1>
      </div>
    <thead>
      <tr>
        <td style="width: 45px;">id</td>
        <td>Name</td>
        <td>Email</td>
         <td>status</td>
        <td>Location</td>
         <td>image</td>
      </tr>
</thead>

      <?php
      require 'connection.php';
      $rows = mysqli_query($conn, "SELECT * FROM `incidents` WHERE type ='approved'");
      $i = 1;

      foreach($rows as $row) :
      ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row["Status"]; ?></td>
        <td style = "width: 300px; height:200px;"><iframe style = "width: 100%; height: 100%;" src="https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed"></iframe></td>
        <td><img src='<?php echo $row["Image"]; ?>'  width = '200px'  height = '70px'></td>
         <form  method="post">
          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

      </tr>
      <?php endforeach; ?>
    </table>


</body>
</html>