<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_pending.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
						<div class="alert alert-info"><strong>Solved Cases</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
                                <thead>
                                    <tr>
                                        <th>Camera Location</th>                                 
                                        <th>Client</th>   
                                        <th>Case</th>                               
                                        <th>Age</th>                                 
                                        <th> reported Date </th>                                 
                                                                       
                                        <th>SolvedDate</th>
                                        <th>report</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysqli_query($conn,"select * from pending
								LEFT JOIN client ON pending.client_id = client.client_id
								LEFT JOIN pendingdetails ON pending.pending_id = pendingdetails.pending_id
								LEFT JOIN Camera on pendingdetails.Camera_id =  Camera.Camera_id 
								where pendingdetails.pending_status = 'Approved'ORDER BY pending.pending_id DESC
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
                                    <td><?php echo $row['comment'];?></td>
                                    <td></td> 
									 
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
							

			</div>		
	
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