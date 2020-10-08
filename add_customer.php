<?php
	$connect = @mysqli_connect("localhost","root","","consession") or die ("cannot connect to database".mysqli_connect_error());
		$customer_id = $_POST['C-id'];
		$name = $_POST['name'];
		$phone_no = $_POST['phone_no'];
		$address = $_POST['address'];
		$dateofbirth = $_POST['dateofbirth'];
		$email = $_POST['email'];

		//$query = "INSERT INTO customer values('$name, $phone_No, $address, $dateofbirth, $email')";  
		$sql = "INSERT INTO customer values ('$customer_id', '$name', '$phone_no', '$address', '$dateofbirth', '$email')";  
		$result = mysqli_query($connect, $sql) or die ("cannot run query".mysqli_error($connect));

		if($result){
			echo "data entered sucessfully";		
			header("location:C_storedata.php");

		} else {
 			echo"entry failed";

		}
?>
