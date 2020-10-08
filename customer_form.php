<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

 
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #425;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container { 
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<link rel="stylesheet" type=text/css
href=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css>

<form action="add_customer.php" method="post" onSubmit="return validateForm();" style="border:1px solid #ccc">
  <div class="container">
    <h1>Customer Form</h1>
    <p>Please fill in this form.</p>
    <hr>
	
	<form aria-live="assertive" role="form">

  <label for="Customer-id"><b>Customer Id</b></label>
	<input  type="text" name="C-id" placeholder="Enter Customer id" >

  <label for="Name"><b>Name</b></label><span style="color: red;"> *</span><br>
	<input type="text" id = "name_1" name="name" placeholder="Enter your name" > 
	
  <label for="Phone_NO"><b>Phone Number</b></label><span style="color: red;"> *</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="tel" id = "phone_2" name="phone_no" placeholder="Enter Phone Number" ><br>
    
  <label for="Address"><b>Address</b></label><span style="color: red;"> *</span><br>
    <input type="text" id = "add_3" name="address" placeholder="Enter your address" >
	
  <label for="dateofbirth"><b>Date Of Birth</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input id="DOB" type="date" name="dateofbirth" ><br>

	<label for="Email"><b>Email</b></label><span style="color: red;"> *</span><br>
    <input type="text" id = "email_4" name="email" placeholder="Enter Email" >


 <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name=next>Next</button>
    </div>
  </div>
</form>
</body>
</html>
<script type="text/javascript">
function validateForm(){
if (isEmpty(document.getElementById('name_1').value.trim())) {
alert('name is required!');
return false;
}
if (isEmpty(document.getElementById('phone_2').value.trim())) {
alert('Phone number is required!');
return false;
}
if (isEmpty(document.getElementById('add_3').value.trim())) {
alert('address is required!');
return false;
}
if (isEmpty(document.getElementById('email_4').value.trim())) {
alert('Email is required!');
return false;
}
if (!validateEmail(document.getElementById('email_4').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>

