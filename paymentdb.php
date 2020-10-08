<?php
	$connect = @mysqli_connect("localhost","root","","consession") or die ("cannot connect to database".mysqli_connect_error());
	if(isset($_POST['continue'])) {
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$cash = $_POST['cash'];
		$cardname = $_POST['cardname'];
		$cardnumber = $_POST['cardnumber'];
		$expirymonth = $_POST['expmonth'];
		$expiryyear = $_POST['expyear'];
		$cvv = $_POST['cvv'];
		
		
		

		//$query = "INSERT INTO customer values('$name, $phone_No, $address, $dateofbirth, $email')";  
		$sql = "INSERT INTO payment values ('$firstname', '$email', '$address', '$city', '$state', '$zip', '$cash', '$cardname', '$cardnumber', '$expirymonth', '$expiryyear', '$cvv')";  
		$result = mysqli_query($connect, $sql) or die ("cannot run query".mysqli_error($connect));

		if($result){
			echo "payment done successfully";		
			//header("location:.php");

		} else {
 			echo"entry failed";

		}
	}
?>
