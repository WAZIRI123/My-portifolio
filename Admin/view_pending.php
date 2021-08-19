<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_pending.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
						<div class="alert alert-info"><strong>pending Cases</strong></div>
                           <form action="" method="post">
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                <th>Camera Location</th>                                 
                                        <th>Client</th>                                 
                                        <th>Age</th>  
                                        <th>Case</th>                                 
                                        <th> reported TIME </th>                                 
                                                                       
                                        <th>SOLVEDDATE</th>
                                        <th>Status</th>
                                        <th>Report</th>
                                </thead>
                                <tbody>
                               
								 
                                  <?php  $user_query=mysqli_query($conn,"select * from pending
								LEFT JOIN client ON pending.client_id = client.client_id
								LEFT JOIN pendingdetails ON pending.pending_id = pendingdetails.pending_id
								LEFT JOIN Camera on pendingdetails.Camera_id =  Camera.Camera_id 
								ORDER BY pending.pending_id DESC
								  ")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['pending_id'];
									$Camera_id=$row['Camera_id'];
									$pending_details_id=$row['pending_details_id'];
									?>
									<tr class="del<?php echo $id ?>">                             
                                    <td><?php echo $row['publisher_name']; ?></td>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
									<td><?php echo $row['date_pending']; ?></td> 
									<td><?php echo $row['date_Approve']; ?> </td>
									<td><?php echo $row['pending_status'];?></td>
                                    <td><?php echo $row['comment'];?></td>
                                    <td><button style="border-radius:10% "><a href="<?php echo 'http://localhost/cctv_kcmc/Admin/';?>comment.php?id=
                                    <?php echo $id?>" class="">report</a></button></td>
									<td> <a rel="tooltip"  title="Approved" id="<?php echo $pending_details_id. $id.
                                   $Camera_id. $row['publisher_name']. $row['firstname']. $row['year_level']. $row['date_pending']
                                    . $row['due_date']. $row['date_Approve']; ?>" href="#delete_Camera<?php echo $pending_details_id; ?>" data-toggle="modal"   class="btn btn-success"><i class="icon-check icon-large"></i>Approve</a>
                                    <?php include('modal_Approve.php'); ?>
                                    
									 
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
							
           
			</div>		
            </form>
           

<script>		
$(".uniform_on").change(function(){
    var max= 3;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('3 Camera are allowed per pending');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>