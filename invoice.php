<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 10%; /* IE10 */
  flex: 10%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
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
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 20px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Invoice</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Invoice details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" size="20">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" size="20">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" size="20">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" size="20">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" size="20">
                <label for="Package">Package</label>
                <input type="text" name="package" size="20">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="">
                <label for="Payment mode">Payment mode</label>
                <select id="Payment">
                  <option value="cash">Cash</option>
                  <option value="card">Card</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="Submit" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
      <table>
        <tr>
          <th><center>Company name</center></th>
        </tr>
        <tr>
          <td>Date: </td>
        </tr>
        <tr>
          <td>Passenger name: </td>
        </tr>
        <tr>
          <td>Place: </td>
        </tr>
        <tr>
          <td>Arrival date: </td>
        </tr>
        <tr>
          <td>Arrival time: </td>
        </tr>
        <tr>
          <td>Package: </td>
        </tr>
        <tr>
          <td>Number of passenger: </td>
        </tr>
        <tr>
          <td>Transportation: </td>
        </tr>
        <tr>
          <td>Hotel name: </td>
        </tr>
        <tr>
          <td>Paid: </td>
        </tr>
        <tr>
          <td>Due: </td>
        </tr>
        <tr>
          <td>TOTAL AMMOUNT: </td>
        </tr>
      </table>    
  </div>
</div>
</body>
</html>
