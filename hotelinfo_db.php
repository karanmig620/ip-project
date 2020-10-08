<?php
	$connect = @mysqli_connect("localhost","root","","consession") or die ("cannot connect to database".mysqli_connect_error());
		$search = $_POST['submit'];

		//$query = "INSERT INTO customer values('$name, $phone_No, $address, $dateofbirth, $email')";  
		$sql = "INSERT INTO search values ('$search')";  
		$result = mysqli_query($connect, $sql) or die ("cannot run query".mysqli_error($connect));

		if($result){
			echo "data entered sucessfully";		
			header("location:addmember_hotel_details.html");

		} else {
 			echo"entry failed";

		}
?>
