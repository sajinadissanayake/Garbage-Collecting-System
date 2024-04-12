<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signed Up Users</title>
    <link rel="stylesheet" href="user.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
    

<div class="table">


<div class="table-header">

<div class="top-heading">
<h1><b> COLLECTING STAFF</b></h1>
</div>
     <div class="counts">



     </div>


 </div>



 <div class="table-section">
    <table>

        <thead>
             <tr>
               <th style="width:100px;" >ID</th>
               <th style="width:120px;" >First Name</th>
               <th style="width:120px;">Last Name</th>
               <th style="width:180px;">Email</th>
               <th style="width:120px;">Usertype</th>
               <th style="width:120px;">Username</th>
            </tr>
        </thead>

        <tbody>



 
 <?php
           $dbhost = "localhost";
           $dbuser = "root";
           $dbpass= "";
           $dbname = "cmc_db";

           $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

         $sql = "SELECT * FROM user where usertype='Staff'";
         $result = $con->query($sql);

         while($row = $result->fetch_assoc()) {



               

            echo

             "<tr>
               <td>$row[id]</td>
               <td>$row[firstname]</td>
               <td>$row[lastname]</td>
               <td>$row[email]</td>
               <td>$row[usertype]</td>
               <td>$row[username]</td>
               
             </tr>";
               
         }



  ?>

 </tbody>

</table>
 
</div>

</div>





</body>
</html>