<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type=text/css
href=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css>
<style>
* {
  box-sizing: border-box;
  background: #fff;

}

.header {
  text-align: center;
  padding: 32px;
}

* {
  box-sizing: border-box;
  padding: 5px;
}
.container
{
  max-width: 1200px;
  margin: auto;
  background: #f2f2f2;
  overflow: auto;
}
.row {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width:390px;
}

.row img
{
  width: 100%;
  height: auto;
}
.desc
{
  padding: 15px;
  text-align: center;
}
.btn
{
  border: 1px solid #3498db;
  background: none;
  padding: 10px20px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
}
.btn1
{
  color: #3498db;
}
.btn1:hover
{
  color: #fff;
}
.btn::before
{
  content: "";
  position: absolute;
  left: 0%;
  width: 100%;
  height: 0%
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before
{
  top: 0;
  border-radius: 0 0 50% 50%;
}
.btn1:hover::before
{
  height: 180%;
}
</style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<!-- Header -->
<div class="header" id="myHeader">
  <h1>Favourate Places In New Delhi</h1>
</div>
<a href ="index.html"><i class="fa fa-chevron-circle-left" style="font-size:29px; position:absolute; top:0; left:0;">Home</i></a>
<div class="container">

  <div class="row">
    <img src="images/D1.jpeg" style="width:20%">
    <div class = "desc"><a href="https://www.youtube.com/watch?v=1N0QZUfiTFk">India Gate</a>
    <a href="https://www.google.com/maps/place/India+Gate/@28.6129167,77.227321,17z/data=!3m1!4b1!4m5!3m4!1s0x390ce2daa9eb4d0b:0x717971125923e5d!8m2!3d28.612912!4d77.2295097">Location</a>
    </div>

    <div class="row">
    <img src="images/D2.jpeg" style="width:20%">
    <div class = "desc"><a href="https://www.youtube.com/watch?v=0wGS1YoI2aE">President House</a>
    <a href="https://www.google.com/maps/place/Rashtrapati+Bhavan/@28.6143525,77.1972413,17z/data=!3m1!4b1!4m5!3m4!1s0x390ce2a99b6f9fa7:0x83a25e55f0af1c82!8m2!3d28.6143478!4d77.19943">Location</a></div>

     <div class="row">
    <img src="images/D3.jpeg" style="width:20%">
    <div class = "desc"><a href="https://www.youtube.com/watch?v=3zyZeml8fE4">Kutub minar</a>
    <a href="https://www.google.com/maps/place/Qutub+Minar/@28.5244801,77.1833319,17z/data=!3m1!4b1!4m5!3m4!1s0x390d1e0667819b4f:0x834995f160759db8!8m2!3d28.5244754!4d77.1855206">Location</a></div>
    
    <div class="row">
    <img src="images/D4.jpeg" style="width:20%">
    <div class = "desc"><a href="https://www.youtube.com/watch?v=AeRYlNi48oM">Jumma masjid</a>
    <a href="https://www.google.com/maps/place/Jama+Masjid/@28.6506839,77.2312534,17z/data=!3m1!4b1!4m5!3m4!1s0x390cfd18df89b215:0xdd57369e29bf9d96!8m2!3d28.6506792!4d77.2334421">Location</a></div>
    </div>
    <div class = "container">
    <a href= "dompdf-master/dompdf-master/pdf_send.php"><button class = "btn btn1">click for pdf</button></a>
    <a href= "addmember_hotel_details.html"><button class = "btn btn1">continue</button></a>
  </div>
</body>
</html>
