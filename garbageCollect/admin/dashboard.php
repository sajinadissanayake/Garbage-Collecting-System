<?php
    session_start() ;
    include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>GTF COLOMBO Dashboard</title>
  <link rel="stylesheet" href="dashboard4.css">

</head>
<body>


<div class="header">

<h1> GTF COLOMBO Admin Dashboard </h1>

<form method="POST">

<div class="button">
<a href="http://localhost/PROJECTS/garbageCollect/admin/adminlogin.php">Sign Out</a>
</div>

</form>
</div>


    <section class="main">
      
      

      <div class="card-section">

        <div class="card">
          <img src="staff.webp">
          <h4>INSERT CAPTAINS AND STAFF</h4>
          <div class="button">
          <a href="http://localhost/PROJECTS/garbageCollect/login/signup.php">View</a>
          </div>
        </div>

        <div class="card">
          <img src="staff.webp">
          <h4>VIEW CAPTAINS AND STAFF</h4>
          <div class="button">
          <a href="http://localhost/PROJECTS/garbageCollect/admin/users/viewusers.php">View</a>
          </div>
        </div>

        <div class="card">
          <img src="users.jpg">
          <h4>VIEW GTF MEMBERS</h4>
          <div class="button">
          <a href="http://localhost/PROJECTS/garbageCollect/admin/users/viewmembers.php">View</a>
          </div>
        </div>

      

        <div class="card">
          <img src="article.jpg">
          <h4>ARTICLES</h4>
          <div class="button">
          <a href="http://localhost/PROJECTS/garbageCollect/admin/articles/index.php">View</a>
          </div>
        </div>

        <div class="card">
          <img src="admin.jpg">
          <h4>ADMINS</h4>
          <div class="button">
          <a href="http://localhost/PROJECTS/garbageCollect/admin/admin.php">View</a>
          </div>
        </div>

    </div>
     </section>



 </body>

</html>




    

      