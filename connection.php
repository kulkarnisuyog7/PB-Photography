<?php
$hn='localhost';
$db='pb_photography';
$un='root';
$pw='';
$conn=new mysqli($hn,$un,$pw,$db);
    if(!$conn){
        die("connection to this database failed due to".mysqli_connect_error());
    }
?>
