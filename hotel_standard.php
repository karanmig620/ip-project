<html>
	<head>
		<title> Hotel</title>
		<link rel="stylesheet" type="text/css" href="standards.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
				  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
		
	</head>
		
		<body>
			
					
			<div class="container">
			
				<div class="wrapper">
					<h1>Standard Hotels</h1>
					
				</div>
			</div>
<?php
	session_start();
	$conn = @mysqli_connect("localhost","root","","consession") or die ("could no connect ".mysqli_connect_error());
	$query = "select * from hotel where `Hotel_Category`='standard'";
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
												<img src='images/standard1.jpg', alt='######Menu image comes here######'>
												<div class='item-detail'>
													<h3>$hotel_name</h3>
													<p>$cata</p>
												</div>
													
													<div class='item_style'>
														<div class='price'>
															<span>Rooms available: $room_able</span>
														</div>
														<div>price:</div>
														<div>₹$price</div>
													</div>
														
														<div class='form-group'>
															<label>Address: $hotel_add</label>
														</div>
															 <div class='btn_group'>
     									<a href='addmember_hotel_details.html'	<button type='button' class='btn btn-primary'>book now</button></a>
										</div>
											</div>

			";

		}
	}
?>
</body>
</html>
