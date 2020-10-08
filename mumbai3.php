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
<div class="header" id="myHeader">
  <h1>Favourate Places In Mumbai</h1>
</div>
 <a href ="index.html"><i class="fa fa-chevron-circle-left" style="font-size:29px; position:absolute; top:0; left:0;">Home</i></a>
            </div>
<div class="container">

  <div class="row">
    <img src="images/m1.jpg" style="width:20%">
    <div class = "desc"><a href="https://www.youtube.com/watch?v=rQ0p0KI1Bjk">Gateway Of India</a>
    <a href="https://www.google.com/maps/place/Gateway+Of+India+Mumbai/@18.9219841,72.8324656,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7d1c73a0d5cad:0xc70a25a7209c733c!8m2!3d18.9219841!4d72.8346543">Location</a></div>

    <div class="row">
    <img src="images/m2.jpg" style="width:20%">
    <div class = "desc"><a href="https://www.youtube.com/watch?v=WU0N5bPIVYw">Elephanta Caves</a>
    <a href="https://www.google.com/maps/place/Elephanta+Caves/@18.9633474,72.9292977,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c5307da3602f:0xf4ab181b1aaef53f!8m2!3d18.9633474!4d72.9314864">Location</a></div>

     <div class="row">
    <img src="images/m3.jpg" style="width:20%">
    <div class = "desc"><a href="https://www.youtube.com/watch?v=pYKqfBWHCec">Marina Drive</a>
    <a href="https://www.google.com/maps/place/Marine+Dr,+Mumbai/@18.9432135,72.8208109,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7d1e25ee8439d:0x5acd924f2726ad2b!8m2!3d18.9432135!4d72.8229996">Location</a></div>
    
    <div class="row">
    <img src="images/m4.jpg" style="width:20%">
    <div class = "desc"><a href="https://www.youtube.com/watch?v=PteUlfkGBSc">Colaba Causeway</a>
    <a href="https://www.google.com/maps/place/Colaba+Causeway,+Mumbai,+Maharashtra/@18.9145814,72.8222198,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7d194218579c9:0xd9ae43411acdb561!8m2!3d18.9145814!4d72.8244085">Location</a></div>
  </div>
   <div class = "container">
    <a href= "dompdf-master/dompdf-master/pdf_send1.php"><button class = "btn btn1">click for pdf</button></a>
     <a href= "addmember_hotel_details.html"><button class = "btn btn1">continue</button></a>
</body>
</html>