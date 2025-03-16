<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>MLM Software</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<h1 class="alert alert-success" align="center">MLM Software</h1>
		<form action="process.php" method="post">
			<div class="row">
				<div class="col-md-6">
					Ref Id:
					<input type="text" name="refid" placeholder="Enter reference Id... " class="form-control" required>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					Name:
					<input type="text" name="name" placeholder="Enter joining candidate name... " class="form-control" required>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					Address:
					<input type="text" name="address" placeholder="Enter candidate addess... " class="form-control" required>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					Phone No:
					<input type="text" name="phone" placeholder="Enter candidate phone number... " class="form-control" required>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					Gender:<br>
					<input type="radio" name="gender" value="Male">Male<br>
					<input type="radio" name="gender" value="Female">Female
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					Joining Amount:
					
					<select class="form-control" name="amount">
						<option value="" selected>Choose Joining Amount</option>
						<?php
							$amount=array(1500,2500);
							foreach($amount as $am){
						?>
						<option><?php echo $am; }?></option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					Joining Side:
					<select class="form-control" name="side">
						<option value="" selected>Choose Joining Side</option>
						<?php
							$side=array("Left","Right");
							foreach($side as $sd){
						?>
						<option><?php echo $sd; }?></option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					Joining Package:
					<select class="form-control" name="pkg">
						<option value="" selected>Choose Joining Package</option>
						<?php
							$package=array("Medicien","Cosmetics","Cloths");
							foreach($package as $pkg){
						?>
						<option><?php echo $pkg; }?></option>
					</select>
				</div>
			</div>
			<br>
			<button id="sb_btn" type="submit" name="reg_btn" class="btn-secondary">Register</button>
		</form>
	</div>
</body>
<button><a href="View_tab.php">View Record</a></button>
</html>