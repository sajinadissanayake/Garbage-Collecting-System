<?php
// include db connection
include 'connection.php';
if(isset($_POST['approve'])){

    $id = $_POST['id'];
    $Status = 'approved';
    $Flag = $_POST['flag'];

    // approve incident
    mysqli_query($conn,"UPDATE `incidents` SET `flag`='$Flag', `type`='$Status' WHERE id='$id'");

}
if(isset($_POST['decline'])){

    $id = $_POST['id'];
    $Status = 'approved';
    $Flag = $_POST['flag'];
   

    // decline incident
    mysqli_query($conn,"DELETE FROM `incidents` WHERE id='$id'");

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CAPTAIN PAGE</title>
    <link rel="stylesheet" href="captain2.css">
  </head>
  <body>

  <div class="top-heading">
         <h1>Welcome to GTF Colombo Captain Page</h1>
         </div>
   
    <table>
    <thead>
    <div class="tablehead">
      <h1>Pending Incidents</h1>
      </div>
      <tr>
        <td style="width: 30px;">id</td>
        <td style="width: 30px;">Name</td>
        <td >Email</td>
         <td style="width: 300px;">status</td>
        <td >Location</td>
         <td >image</td>
         <td style="width: 100px;">Emergency Flag</td>
          <td >approve / Decline</td>

         
      </tr>
</thead>

      <?php
      require 'connection.php';
      $rows = mysqli_query($conn, "SELECT * FROM `incidents` WHERE type ='pending'");
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
         <td><img src="red.png" style="width:50px; height: 50px;"><input type="radio" name="flag" value="emergency">
          <img src="yellow.png" style="width:50px; height: 50px;"><input type="radio" name="flag"  value="nonemegency"></td>
          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <td><input type="submit" name="approve" value="approve">
        <input type="submit" name="decline" value="decline"></td>
         </form>

      </tr>
      <?php endforeach; ?>
    </table>
    <br>


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



    <script src="script.js"></script>




  </body>
</html>