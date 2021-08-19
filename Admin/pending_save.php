	<?php
 	include('dbcon.php');
	
		$id=$_POST['selector'];
 	$client_id  = $_POST['client_id'];
	$due_date  = $_POST['due_date'];

	if ($id == '' ){ 
	header("location: pending.php");
	?>
	

	<?php }else{
	


	mysqli_query($conn,"insert into pending (client_id,date_pending,due_date) values ('$client_id',NOW(),'$due_date')")or die(mysqli_error());
	$query = mysqli_query($conn,"select * from pending order by pending_id DESC")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	$pending_id  = $row['pending_id']; 
	

$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"insert pendingdetails (Camera_id,pending_id,pending_status) values('$id[$i]','$pending_id','pending')")or die(mysqli_error());

}
header("location: pending.php");
}  
?>
	
	

	
	