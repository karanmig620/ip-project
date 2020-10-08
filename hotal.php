<html>
	<head>
		<title>menu page</title>
		<link rel="stylesheet" type="text/css" href="menu.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		
	</head>
		
		<body>
			
					
			<div class="container">
			
				<div class="wrapper">
					<h1>Premium Hotels</h1>
					
				</div>
			</div>
<?php
	session_start();
	$conn = @mysqli_connect("localhost","root","","consession") or die ("could no connect ".mysqli_connect_error());
	$query = "select * from hotel where `Hotel_Category`='premium'";
	$data = mysqli_query($conn,$query) or die ("could not run query 1".mysqli_error());
	if(mysqli_num_rows($data)>0){
		while($row = mysqli_fetch_assoc($data)) {
			$id = $row['Hotel_Id'];
			$image_name = $id.".jpg";
			$hotel_name = $row['Hotel_Name'];
			$hotel_add = $row['Hotel_address'];
			$room_able = $row['rooms_able'];
			$price = $row['Room_Price'];
			$cata = $row['Hotel_Category'];
			echo "
				<div class='image'>
												<img src='$image_name' alt='######Menu image comes here######'>
												<div class='item-detail'>
													<h3>$hotel_name</h3>
													<p>$cata</p>
												</div>
													
													<div class='item_style'>
														<div class='_9uwBD wY0you'>
															<span class='fa fa-star checked'></span>
															<span>Rooms: $room_able</span>
														</div>
														<div>•</div>
														<div>₹$price</div>
													</div>
														
														<div class='form-group'>
															<label>Address: $hotel_add</label>
														</div>
											</div>
											
										</div>
			";
		}
	}
?>
</body>
</html>
