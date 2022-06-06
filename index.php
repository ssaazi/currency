<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		
		<form method="GET" action="">
			<div class="form-inline">
				<label>FROM:</label>
				<select name="currency" class="form-control">
					<option value="">Select an option</option>
					<option value="Dollar">Dollar</option>
					<option value="UGX">Uganda Shillings</option>
					
				</select><br><br>
				<label>TO: </label>
				<select name="currency" class="form-control">
					<option value="">Select an option</option>
					<option value="Dollar">Dollar</option>
					<option value="UGX">Uganda Shillings</option>
					
				</select><br><br>
				<label >Amount</label>
				<input class="form-control" type="text" name="txt_digit"/><br>
				
				<br /><br />
				<center><button type="submit" name="btn_submit" class="btn btn-primary form-control" style="width:30%;">Convert</button></center>
				<br />
				<?php require 'convert.php'?>
			</div>
		</form>
	</div>
</body>
</html>