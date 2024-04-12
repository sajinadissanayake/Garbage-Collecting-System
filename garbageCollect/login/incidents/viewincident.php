<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="captain1.css">
</head>
<body>
    

<div class="table-section">
    <table>

        <thead>
        <div class="tablehead">
      <h1>Submitted Incidents</h1>
      </div>
             <tr>
               <th style="width: 20px">ID</th>
               <th style="width: 20px">Name</th>
               <th style="width: 30px">Email</th>
               <th style="width: 90px">Status</th>
               <th style="width: 100px;">Incident Area</th>
               <th style="width: 100px;">Location </th>
               <th style="width: 100px">Image</th>
               <th style="width: 50px">Actions</th>
            </tr>
        </thead>

        <tbody>




      <?php
      require 'connection.php';
      $rows = mysqli_query($conn, "SELECT * FROM incidents ORDER BY id DESC");
      $i = 1;

      foreach($rows as $row) :
      ?>
      <tr>
      <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row["Status"]; ?></td>
         <td><?php echo $row["area"]; ?></td>
        <td style = "width: 300px; height:200px;"><iframe style = "width: 100%; height: 100%;" src="https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed"></iframe></td>
        <td><img src='<?php echo $row["Image"]; ?>'  width = '200px'  height = '70px'></td>

        <td><a href="update.php?id=<?php echo $row['id'] ?>">Update</a>
             &nbsp &nbsp
        <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
        </td>

        
      </tr>
      <?php endforeach; ?>
    </table>
    </div>



</body>
</html>