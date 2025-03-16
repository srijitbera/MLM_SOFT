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
	<title>View Candidate</title>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "mlmdb");

		$query1 = "select * from mlmtab";
		$obj1 = $conn->query($query1);
	?>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
  		<h2 class="alert alert-info">MLM Software Record</h2>
  		<table class="table table-striped">
      	<tr>
		        	<th>Serial No.</th>
		        	<th>Ref ID</th>
		        	<th>Name</th>
		        	<th>Address</th>
		        	<th>Phone No.</th>
		        	<th>Gender</th>
		        	<th>Joining Amount</th>
		        	<th>Joining Side</th>
		        	<th>Joining Package</th>
		        	<th>Commission</th>
      	</tr>
      	<?php
      		if ($obj1->num_rows > 0) {
      			while ($res = $obj1->fetch_assoc()) {
      				echo "<tr>
      					<td>{$res["slno"]}</td>
      					<td>{$res["refid"]}</td>
      					<td>{$res["name"]}</td>
      					<td>{$res["address"]}</td>
      					<td>{$res["phone"]}</td>
      					<td>{$res["gender"]}</td>
      					<td>{$res["amount"]}</td>
      					<td>{$res["side"]}</td>
      					<td>{$res["package"]}</td>
      					<td>{$res["commission"]}</td>
      				</tr>";
      			}
      		} else {
            	echo "<tr><td colspan='10' class='text-center text-danger'>No records found</td></tr>";
        	}
      		?>
  		</table>
	</div>
</body>
</html>