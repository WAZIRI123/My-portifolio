<?php 
include('dbcon.php');

$id=$_GET['id'];
$Camera_id = $_GET['Camera_id'];

mysqli_query($conn,"update pending LEFT JOIN pendingdetails on pending.pending_id = pendingdetails.pending_id   set pending_status='Approved',date_Approve= NOW() where pending.pending_id='$id' and pendingdetails.Camera_id = '$Camera_id'")or die(mysqli_error());						
 header('location:view_pending.php');

?>	