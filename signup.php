<?php
	if(isset($_GET['signup'])) {
		$user = $_GET['user'];
		$password = $_GET['password'];
		$connect = @mysqli_connect("localhost","root","","userregistration") or die ("cannot connect to database".mysqli_connect_error());
		$sql = "insert into usertable (name, password) values ('$user', '$password')";
		$result = mysqli_query($connect, $sql) or die ("cannot run query".mysqli_error());
		echo "<script> window.alert('sucessfully signed in now go back to login page to enter');</script>";
		//header("location:login.php");//change the location to what ever page is next in your project (change after location:whateverpage.extension in header)		
	}
?>
<?php
	if(isset($_GET['user'])) {
		$user = $_GET['user'];
		$password = $_GET['password'];
		$connect = @mysqli_connect("localhost","root","","userregistration") or die ("cannot connect to database".mysqli_connect_error());
		$sql = "select * from usertable where name='$user' and password='$password'";
		$result = mysqli_query($connect, $sql) or die ("cannot run query".mysqli_error());
		if(mysqli_num_rows($result) == 1) {
			echo "<script> window.alert('user logged in');</script>";
			header("location:hotel_info.php");//change the location to what ever page is next in your project (change after location:whateverpage.extension in header)
		}
		else {
			echo "<script> window.alert('cannot login.. wrong username/password'); </script>";
			
		}
	}
?>