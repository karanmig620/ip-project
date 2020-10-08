<?php
	$connect = @mysqli_connect("localhost","root","","consession") or die ("cannot connect to database".mysqli_connect_error());

		$sql = "DELETE FROM customer WHERE C_id= '$_GET[id]'";  
		if(mysqli_query($connect, $sql))
			header("location:c_storedata.php");
		else
			echo "NOT Deleted";
	?>

	