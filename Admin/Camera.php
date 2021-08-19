<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_Camera.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Camera Table</strong>
                                </div>
						<!--  -->
						<ul class="nav nav-pills">
										<li   class="active"><a href="Camera.php">All</a></li>
										<li><a href="new_Camera.php">New Camera</a></li>
										<li><a href="old_Camera.php">Old Camera</a></li>
										<li><a href="lost.php">Lost Camera</a></li>
										<li><a href="damage.php">Damage Camera</a></li>
										<li><a href="sub_rep.php">Subject for Replacement</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>Camera List</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example" 
							>
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
								<p><a href="add_Camera.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Cameras</a></p>
							
                                <thead >
								<tr>
									    <th>CAMERA_No</th>                                 
                                        <th>Model</th>                                 
                                        <th>MACHINE_TYPE</th>
										<th>Machine_NAME</th>
										<th class="action">BARCODE</th>
										<th>CAPACITY</th>
										<th>Location</th>
										<th>SERIAL_NO</th>
										<th>ADDED_DATE</th>
										<th>Status</th>
										<th class="action">Action</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
									

								  $user_query=mysqli_query($conn,"select * from Camera where status != 'Archive'")or die(mysqli_error());
									$sn=1;
								  while($row=mysqli_fetch_array($user_query)){
									$id=$row['Camera_id'];  
									$cat_id=$row['category_id'];
									$Camera_copies = $row['Camera_copies'];
									
									$pending_details = mysqli_query($conn,"select * from pendingdetails where Camera_id = '$id' and pending_status = 'pending'");
									$row11 = mysqli_fetch_array($pending_details);
									$count = mysqli_num_rows($pending_details);
									
									$total =  $Camera_copies  -  $count; 
									/* $t4otal =  $Camera_copies  - $pending_details;
									
									echo $total; */
											$cat_query = mysqli_query($conn,"select * from category where category_id = '$cat_id'")or die(mysqli_error());
											$cat_row = mysqli_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $sn++; ?></td>
                                    <td><?php echo $row['Camera_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo /* $row['Camera_copies']; */   $total;   ?> </td>
                                     <td><?php echo $row['Camera_pub']; ?></td>
									 <td><?php echo $row['publisher_name']; ?></td>
									 <td><?php echo $row['isbn']; ?></td>
										
									 <td><?php echo $row['date_added']; ?></td>
									 <td><?php echo $row['status']; ?></td>
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_Camera<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_Camera_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_Camera.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>