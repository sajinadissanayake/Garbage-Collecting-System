<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "cmc_db");

  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
	$image_title = mysqli_real_escape_string($db, $_POST['image_title']);
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO blog (image, image_title, image_text) VALUES ('$image','$image_title', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM blog");
?>
<!DOCTYPE html>
<html>
<head>
<title>ARTICLES</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="content">

  <div class="main">

<div class="area">

  <form action="index.php" method="POST" enctype="multipart/form-data">

<h1>INSERT BLOG POSTS</h1>

<div class="details">
<label for="title">Enter Image: </label>
<input type="file"  class="details-values"  name="image">
</div>

<div class="details">
<label for="year">Enter Article Title: </label>
<input type="text"  class="details-values" name="image_title">
</div>

<div class="details">
<label for="syllabus">Enter Description: </label>
<textarea name="image_text" id="" cols="110" rows="10"></textarea>
</div>


<button type="submit" value="UPLOAD" name="upload" class="submit"> UPLOAD</button>

</div>
</div>







</div>
</body>
</html>