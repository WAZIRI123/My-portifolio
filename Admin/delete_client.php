<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($conn,"delete from client where client_id='$id'") or die(mysqli_error());
header('location:client.php');
?>