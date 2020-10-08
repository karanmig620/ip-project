<?php
	if(isset($_GET['user'])) {
		$user = $_GET['user'];
		$password = $_GET['password'];
		$connect = @mysqli_connect("localhost","root","","userregistration") or die ("cannot connect to database".mysqli_connect_error());
		$sql = "insert into usertable (name, password) values ('$user', '$password')";
		$sql = "select * from usertable where name='$user' and password='$password'";
		$result = mysqli_query($connect, $sql) or die ("cannot run query".mysqli_error());
		if(mysqli_num_rows($result) == 1) {
			echo "<script> window.alert('user logged in');</script>";
			header("location:index.html");//change the location to what ever page is next in your project (change after location:whateverpage.extension in header)
		}
		else {
			echo "<script> window.alert('Wrong username/password Enter correct details'); </script>";
			
		}
	}
?>