<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin2.css">
</head>
<body>
    
<div class="table">

<div class="table-header">

<p><b>INSERT ADMINS</b></p>


 <div>
 <form method="post">
 <input class= "input" type="text" placeholder="First Name" name="first_name">
 &nbsp &nbsp
 <input class= "input" type="text" placeholder="Last Name" name="last_name">
 &nbsp &nbsp
 <input class= "input" type="text" placeholder="Email" name="email">
 &nbsp &nbsp
 <input class= "input" type="text" placeholder="User Name" name="username">
 &nbsp &nbsp
 <input class= "input" type="text" placeholder="Password" name="password">
 &nbsp &nbsp
 <input class="upload" type='submit' value='Insert' name='but_upload'>
 </form>
 </div>

 </div>



 <div class="table-section">
    <table>

        <thead>
             <tr>
               <th style="width: 20px">ID</th>
               <th style="width: 70px">First Name</th>
               <th style="width: 70px">Last Name</th>
               <th style="width: 100px">Email</th>
               <th style="width: 70px">Username</th>
               <th style="width: 70px">Password</th>
               <th style="width: 100px">Actions</th>
            </tr>
        </thead>

        <tbody>



 
 <?php
           $dbhost = "localhost";
           $dbuser = "root";
           $dbpass= "";
           $dbname = "cmc_db";

           $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

         $sql = "SELECT * FROM admin";
         $result = $con->query($sql);

         while($row = $result->fetch_assoc()) {



               

            echo

             "<tr>
               <td>$row[id]</td>
               <td>$row[first_name]</td>
               <td>$row[last_name]</td>
               <td>$row[email]</td>
               <td>$row[username]</td>
               <td>$row[password]</td>
               
               
               <td> 
                 <a href='http://localhost/PROJECTS/garbageCollect/admin/update.php ?id=$row[id]'>Update</a>

                 &nbsp &nbsp

                 <a href='http://localhost/PROJECTS/garbageCollect/admin/delete.php ?id=$row[id]'>Delete</a>
               </td>

             </tr>";
               
         }
       
  ?>

 </tbody>

</table>
 
</div>

</div>

</body>
</html>