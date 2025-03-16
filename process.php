<?php
	$con = mysqli_connect("localhost","root", "", "mlmdb");
	$refid = "";
	$name = "";
	$address = "";
	$phone = "";
	$gender = "";
	$amount = "";
	$side = "";
	$pkg = "";
	$commission = "";
	if(isset($_REQUEST['reg_btn'])){
		$refid = $_POST['refid'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$amount = $_POST['amount'];
		$side = $_POST['side'];
		$pkg = $_POST['pkg'];

		switch ($side) {
			case 'Right':
				$commission = $amount/100*25;
				break;
			case 'Left':
				$commission = $amount/100*12;
				break;
			default:
				// code...
				break;
		}
		$query1 = "insert into mlmtab(refid,name,address,phone,gender,amount,side,package,commission)values('$refid','$name','$address','$phone','$gender','$amount','$side','$pkg','$commission')";
		$obj1 = $con->query($query1);
		if($obj1==1){
			echo "<script>alert('Candidate Registerd & Joinder')</script>";
		}
		else{
			echo "<script>alert('Candidate Not Registerd & Not Joinder')</script>";
		}
	}

?>