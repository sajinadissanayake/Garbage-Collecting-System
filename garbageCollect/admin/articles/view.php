
<div class="top-heading">
<h1>OUR BLOG</h1>
</div>
<?php
$db = mysqli_connect("localhost", "root", "", "cmc_db");

$result = mysqli_query($db, "SELECT * FROM blog");

    while ($row = mysqli_fetch_array($result)) {

      echo "<div class='article'>";
      	echo "<img src='images/".$row['image']."' >";
        echo "<h1>".$row['image_title']."</h1>";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";

    }
  ?>


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
    
</body>
</html>