<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Client_name</label>
				<div class="controls">
				<select name="Approveee_name">
				<option></option>
				<?php $result =  mysqli_query($conn,"select * from client")or die(mysqli_error()); 
				while ($row=mysqli_fetch_array($result)){ ?>
				<option value="<?php echo $row['client_id']; ?>"><?php echo $row['firstname']." ".$row['lastname']; ?></option>
				<?php } ?>
				</select>
				</div>
			</div>
				<div class="control-group"> 
					<label class="control-label" for="inputEmail">Report Date</label>
					<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
					</div>
				</div>
				<div class="control-group"> 
					<label class="control-label" for="inputEmail">solution Date</label>
					<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
					</div>
				</div>
    </form>