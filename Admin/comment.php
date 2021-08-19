<?php include('header.php'); ?>
<?php include('session.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Add Report</div>
			<p><a href="view_pending.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addother">
	<div class="details">Please Enter Details Below</div>		
	<form method="POST" action="" enctype="multipart/form-data">
			
	<label class="control-label" for="Report">report</label>
			
	<div class="formcontrol">
      <textarea name="comment" id="" cols="10" rows="10" style="min-width:1000px"></textarea>
      <br>
      <input type="submit" name="submit">
    </div>	
	
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        # code..
include('dbcon.php');
$id=$_GET['id'];
$comment=$_POST['comment'];
$res=mysqli_query($conn," UPDATE pending
SET comment='$comment'
WHERE pending_id='$id';");
if ($res) {
	# code...
	header('location:view_pending.php');
	
}
	}

?>
<?php include('footer.php') ?>


