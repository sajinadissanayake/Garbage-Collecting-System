<?php
require 'connection.php';

if(isset($_POST["submit"])){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $latitude = $_POST["latitude"];
  $longitude = $_POST["longitude"];
  $area = $_POST["area"];
  $status = $_POST["status"];
   $type = "pending";

    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);



  $query = "INSERT INTO incidents VALUES('', '$name', '$email', '$latitude', '$longitude','$img_des','$area', '$status', '$type')";
  mysqli_query($conn, $query);

  echo
  "<script>
  alert('Incident Reported Successfully');
  document.location.href = 'memberhome.php';
  </script>"
  ;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MEMBER PAGE</title>
    <link rel="stylesheet" href="member3.css">
  </head>
  <body onload = "IncidentLoc();">  

<div id="content">

<div class="main">

<div class="area">

<form class="myForm" action="" method="post" autocomplete="off" enctype="multipart/form-data">

<h1>REPORT AN INCIDENT</h1>

<div class="details">
<label for="title">name: </label>
<input type="text"  class="details-values" name="name">
</div>

<div class="details">
<label for="email">Email: </label>
<input type="text" class="details-values" name="email">
</div>

<input type="hidden" name="latitude" value="">
<input type="hidden" name="longitude" value="">

<div class="details">
<label for="address"> Incident Area: </label>
<input type="text" class="details-values" name="area">
</div>

<div class="details">
<label for="syllabus">Incident Status: </label>
<textarea name="status" id="" cols="110" rows="10"></textarea>
<p><i>*Your location will be automatically submitted as the incident location due to secuirity policies. Please submit your report when you are reached the incident location.</i></p>
</div>
&nbsp
<div class="details">
<label for="">Enter Image: </label>
<input type="file" name="image">
</div>

<button class="submit" type="submit" name="submit">SUBMIT</button>

</div>
</div>


    <script src="script.js"></script>
  </body>
</html>


