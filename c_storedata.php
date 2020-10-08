<?php
	$connect = mysqli_connect("localhost", "root", "", "consession");

	$sql = "SELECT * FROM customer";
	$query_run = mysqli_query($connect, $sql);

?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content = "ie-edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="modal fade" id="customeraddmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add customer data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_customer.php" method="post" onSubmit="return validateForm();" style="border:1px solid #ccc">
      <div class="modal-body">
          <div class="form-group">
            <label for="enter your name">Name</label><span style="color: red;"> *</span>
            <input type="text" id = "name_1" name="name" class="form-control" aria-describedby="name">
           </div>

          <div class="form-group">
            <label for="Phone_NO">phone number</label><span style="color: red;"> *</span>
            <input type="tel" id = "phone_2" name="phone_no" class="form-control">
          </div>
         
         <div class="form-group">
            <label for="Address">Address</label><span style="color: red;"> *</span>
            <input type="text" id = "add_3" name="address" class="form-control">
          </div>

          <div class="form-group">
            <label for="DOB">Date of birth</label>
            <input type="date" name="dateofbirth" class="form-control">
          </div> 

          <div class="form-group">
            <label for="Email">Email</label><span style="color: red;"> *</span>
            <input type="text" id = "email_4" name="email" class="form-control">
           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name = "next" class="btn btn-primary">Save data</button>
      </div>
          </form>
    </div>
  </div>
</div>  
        <center>  <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#customeraddmodel">
                Add customer data</button>
                <a href ="index.html"><i class="fa fa-chevron-circle-left" style="font-size:29px; position:absolute; top:9; left:9;">Home</i></a>
            </div>
          </div>  </center> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<center><table class = "table table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>phone_no</th>
			<th>Address</th>
			<th>DOB</th>
			<th>Email</th>
      <th  colspan="5">delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if(mysqli_num_rows($query_run) > 0)
		{
			while($row = mysqli_fetch_assoc($query_run))
			{
?>
				
<tr>
	<td> <?php echo $row['Name']; ?></td>
	<td> <?php echo $row['phone_no']; ?></td>
	<td> <?php echo $row['Address']; ?></td>
	<td> <?php echo $row['DOB']; ?></td>
	<td> <?php echo $row['Email']; ?></td>
 <td><a href=delete.php?id=<?php echo $row['C_id']; ?> class ="btn btn-danger">
Delete</a>
</td>
</tr>
<?php
			}
		}
		else{
			echo "No Record Found";
		}
?>
</tbody>
</table>
</body>
</html>
<script type="text/javascript">
function validateForm(){
if (isEmpty(document.getElementById('name_1').value.trim())) {
alert(' aree name is required!');
return false;
}
if (isEmpty(document.getElementById('phone_2').value.trim())) {
alert(' hnji Phone number is required!');
return false;
}
if (isEmpty(document.getElementById('add_3').value.trim())) {
alert('dhyaan se  address is required!');
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


 