<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_Camera.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($conn,"select * from Camera LEFT JOIN category on category.category_id  = Camera.category_id where Camera_id='$get_id'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
		$category_id = $row['category_id'];
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Camera</div>
			<p><a class="btn btn-info" href="Camera.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addother">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_Camera.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Camera_Name:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="Camera_title" value="<?php echo $row['Camera_title']; ?>" placeholder="Camera_title" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Camera_title" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Category:</label>
			<div class="controls">
			<select name="category_id">
				<option value="<?php echo $category_id; ?>"><?php echo $row['classname']; ?></option>
				<?php $query1 = mysqli_query($conn,"select * from category where category_id != '$category_id'")or die(mysqli_error());
				while($row1 = mysqli_fetch_array($query1)){
				?>
				<option value="<?php echo $row1['category_id']; ?>"><?php echo $row1['classname']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Machine:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="author" value="<?php echo $row['author']; ?>" placeholder="author" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Camera_Barcode:</label>
			<div class="controls">
			<input class="span1" type="text" id="inputPassword" name="Camera_copies" value="<?php echo $row['Camera_copies']; ?>" placeholder="Camera_copies" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">CameraCapacity:</label>
			<div class="controls">
			<input type="text" class="span4"  id="inputPassword" name="Camera_pub" value="<?php echo $row['Camera_pub']; ?>" placeholder="Camera_pub" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">CameraLocation:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="publisher_name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">SerialNo:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="isbn" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Made:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="made" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status">
				<option><?php echo $row['status']; ?></option>
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
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>