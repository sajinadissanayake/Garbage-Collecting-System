<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `user` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";


    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

    header("Location: viewusers.php");

} 

?>