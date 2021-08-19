<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($conn,"update Camera set status = 'Archive' where Camera_id='$id'")or die(mysqli_error());
header('location:Camera.php');
?>