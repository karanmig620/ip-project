<?php
	$connect = @mysqli_connect("localhost","root","","consession") or die ("cannot connect to database".mysqli_connect_error());
		$firstname= $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$phone_no = $_POST['phone_no'];
		$email = $_POST['email'];
		$checkin = $_POST['checkin'];
		$checkout = $_POST['checkout'];
		$adults = $_POST['adults'];
		$children = $_POST['children'];

		//$query = "INSERT INTO customer values('$name, $phone_No, $address, $dateofbirth, $email')";  
		$sql = "INSERT INTO places values ('$firstname', '$lastname', '$phone_no', '$email', '$checkin', '$checkout', '$adults', '$children')";  
		$result = mysqli_query($connect, $sql) or die ("cannot run query".mysqli_error($connect));

		if($result){
			echo "data entered sucessfully";		
			header("location:payment1.php");

		} else {
 			echo"entry failed";

		}
?>
