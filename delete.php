<?php

require_once'connection.php'; 
$id= $_GET['id'];

$sql="DELETE FROM `contactus` WHERE id= $id";

$query=mysqli_query($conn,$sql);

if($query){
    header("location:enquiry.php");

}


?>
