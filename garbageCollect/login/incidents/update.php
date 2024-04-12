<?php
include 'connection.php';
if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    mysqli_query($conn,"UPDATE `incidents` SET `email`='$email',`area`='$area',`Image`='$img_des',`Status`='$status' WHERE id =$ID ");
    header("location:http://localhost/PROJECTS/garbageCollect/login/incidents/member.php");


}
?>






<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Incident</title>
            <link rel="stylesheet" href="update2.css">
        </head>
        <body>

        <?php

include 'connection.php';
$ID = $_GET['id'];
$Record = mysqli_query($conn,"SELECT * FROM `incidents` WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>

        <div class="area">

<form action="update.php" method="post" enctype="multipart/form-data">

   <h1>Update Your Incident</h1>

  <div class="details">
  <label for="email">Email </label>
  <input type="text"  class="details-values" value="<?php echo $data['email'] ?>" name="email">
  </div>

 <div class="details">
  <label for="area">Incident Area </label>
  <input type="text"  class="details-values" value="<?php echo $data['area'] ?>" name="area">
  
  </div>


  <div class="details">
  <label for="status">Status </label>
  <input type="text"  class="details-values" value="<?php echo $data['Status'] ?>" name="status">
  
  </div>

  <div class="details">
  <label for="image">image </label>
  <input type="file" name="image" value="<?php echo $data['Image'] ?>"><br><img src="<?php echo $data['Image'] ?>"  width = '200px'  height = '200px' alt="" style="margin-left:200px;" > <br>
            <input type="hidden" name="id"  value="<?php echo $data['id'] ?>">
  
  </div>

  <input type="submit" value="UPDATE" name="update" class="submit">


</form>
</div>   

</body>
</html>