<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_Camera.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Add Camera</div>
			<p><a href="Camera.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addother">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="Camera_save.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Camera_Name:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="Camera_title"  placeholder="CameraName" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Category</label>
			<div class="controls">
			<select name="category_id">
			<option></option>
			<?php
			$cat_query = mysqli_query($conn,"select * from category");
			while($cat_row = mysqli_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Machine:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="Machine" required>
			</div>
		</div>
		

		
		

		<div class="control-group">
			<label class="control-label" for="iionputPassword">Camera_Barcode:</label>
			<div class="controls">
			<input type="text" class="span1" id="inputPassword" name="Camera_copies"  placeholder="" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Camera Capacity:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="Camera_pub"  placeholder="Storage Capacity" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Camera Location:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="publisher_name"  placeholder="Camera Location" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">SerialNo:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="Serial Number" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Made:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year"  placeholder="made" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>New</option>
				<option>Old</option>
				<option>Lost</option>
				<option>Damage</option>
				<option>Subject for Replacement</option>
			</select>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>