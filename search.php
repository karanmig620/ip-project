<?php
	session_start();
	
	if(isset($_GET['searchwrite'])) {
		$search = $_GET['searchwrite'];//search bar name to get value from form
		
	
			$connect = @mysqli_connect("localhost","root","","consession") or die ("could not connect".mysqli_connect_error());
			$sql22 = "select * from city where cityname='$search'";
			$result22 = mysqli_query($connect,$sql22) or die ("could not run query".mysqli_error());
			if(mysqli_num_rows($result22) >= 1) {
				while($row22 = mysqli_fetch_assoc($result22)) {
				//fetchdata
					$f_id = $row22['F_id'];
					$search1 = $f_id.PHP_EOL;
					$filename = "../images/'$search'.jpg";
					echo "<img src='.$filename.'>";
		}
	}
}