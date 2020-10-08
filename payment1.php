<!DOCTYPE hthml>
<html lang = "en">
<head><style>
body{
  font-family: arial, helvetica, sans-serif;
  font-size: 17px;
  padding: 8px;
}
h2
{
  text-align: center;
}
*
{
  box-sizing: border-box;
}
 .row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0 -10px;
}

.col-25 {
  -ms-flex: 25%;
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%;
  flex: 75%;
}
.col-25, .col-50, .col-75 {
  padding: 0 16px;
}
.container {
  background-color: #f2f2f2;
  padding: 3px 18px 13px 18px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
.a{
  border: 1px solid lightgrey;
}
span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
  <meta charset = "UTF-8">
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
  <title>Payment gateway</title>
</head>
<body>
  <h2>Payments Page</h2>
  <div class = "row">
    <div class = "col-75">
      <div class = "container">
        <form action = "paymentdb.php" action="post" onSubmit="return validateForm();">

          <div class = "row">
            <div class = "col-58">
              <h3>Billing address</h3>

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="firstname" name="firstname" placeholder=" k. kmal ">

            <label for="email"><i class="fa fa-envelope"></i> Email<span style="color: red;"> *</span></label>
            <input type="text" id="email" name="email" placeholder="kamal@gmail.com ">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address" placeholder=" ward 2 ">

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="hp">

            <div class="row">
              <div class="col-50">
                <label for="state">State<span style="color: red;"> *</span></label>
                <input type="text" id="state" name="state" placeholder="haryana ">
              </div>
              <div class="col-50">
                <label for="state">zip Code</label>
                <input type="text" id="zip" name="zip" placeholder="123001 ">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Your payment method</h3>
            <label for="fname">Accepted Card</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style ="color: navy;"></i>
              <i class="fa fa-cc-amex" style ="color: blue;"></i>
              <i class="fa fa-cc-mastercard" style ="color: red;"></i>
              <i class="fa fa-cc-discover" style ="color: orange;"></i><br><br>
           Cash:  <input type="text" id="cash" name="cash" >
            </div>
      <label for="cname">Name On Card<span style="color: red;"> *</span></label>
            <input type="text" id="cardname" name="cardname" placeholder="name on card ">

            <label for="ccnum">card number<span style="color: red;"> *</span></label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-3333-4444-6666 ">

            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="january  ">
            </div>

            <div class="row">
              <div class="col-50">
                <div class="card">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2021 ">
                </div>      
              </div>

              <div class="col-50">
                <div class="card">
                <label for="cvv">your CVV number<span style="color: red;"> *</span></label>
                <input type="text" id="cvv" name="cvv" placeholder="321">
                </div>
              </div>
            </div>

          <label>
       <name= verify before continue ></label>
       <input type = "submit" value = "continue" name = "continue" class = "btn">
        </form>
      </div>
    </div>
    <div class="col-25">
    <div class="container">
      <h4>Total package
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>&#8377;</b>
          <input type="amount" name="price">
        </span>
      </h4>
      <p>Paid <span class="price">&#8377;
      <input type="amount" name="price">
      </span></p>
      <p>Due <span class="price">&#8377;<input type="amount" name="price"></span></p>
      <hr>
      <p>Total Amount<span class="price" style="color: black"><b>&#8377;<input type="amount" name="price"></b></span></p>
    </div>
  
  </div>
</body>
</html>
<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('state').value.trim())) {
alert('state is required!');
return false;
}
if (isEmpty(document.getElementById('cardname').value.trim())) {
alert('cardname is required!');
return false;
}
if (isEmpty(document.getElementById('cardumber').value.trim())) {
alert('cardnumber is required!');
return false;
}
if (isEmpty(document.getElementById('email').value.trim())) {
alert('Email is required!');
return false;
}
if (!validateEmail(document.getElementById('email').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('cvv').value.trim())) {
alert('cvv is required');
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