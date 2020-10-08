<html>
<head><style>
body{
  background: linear-gradient(rgba(0 ,0 ,30 ,0.123),rgba(0 ,0 ,30 ,0.123)),url(images/search2.jpg);
  background-size: cover;
  background-position: center;
}
.input-group
{
  width: 90% !important;
  max-width: 500px;
  border-radius: 30px;
  background: #fff;
  margin: auto;
  padding: 2px;
}
.form-control
{
  border: 0 !important;
  border-radius: 30px !important;
  margin: 2px;
  box-shadow: none !important; 
}
.input-group-text
{
  width: 100px;
  background-image: linear-gradient(#00ff7e,#1f3d90)
  border:0 !important;
  /*color: #fff !important;*/
  padding: 0 25px !important;
  border-radius: 30px !important;
  box-shadow: none !important;
}

/*features*/

.features
{
  padding: 10px 0;
}
h1
{
  text-align: center;
  padding-bottom: 25px;
}
.feature-img img
{
  width: 100%;
  height: auto;
}
.price
{
  width: 50px;
  height: 50px;
  background: #ff5722;
  color: #fff;
  font-weight: 600;
  border-radius: 50%;
  padding: 10px;
  box-shadow: 0 0 10px 1px rgba(38, 73, 213, 0.18);
  position: absolute;
  left: 20px;
  bottom: -25px; 
}
.feature-img
{
  position: relative;
}
.Ratings
{
  padding: 3px;
  float: right;
  background: #fff;
  bottom: -1px;
  right: 0;
  position: absolute;
}
.features .fa
{
  font-size: 15px;
  color: #ff5722;
}
.feature-details
{
  padding: 20px;
  text-align: justify;
}
.feature-details h4
{
  font-weight: 600;
  margin-top: 20px;
}
.feature-details .fa
{
  margin-right: 5px;
}
.feature-box
{
  box-shadow: 0 0 20px 3px rgba(37, 73, 214, 0.18);
  margin-bottom: 30px; 
}
.gallery
{
  padding: 100px 0;
  background: #efefef;
}
.gallery-box img
{
  width: 100%;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}
.gallery-box img:hover
{
  transform: scale(1.1);
}
.gallery-box h4
{
  width: 200px;
  text-align: center;
  color: #fff;
  text-shadow: -2px 2px 2px #000;
  font-weight: 600;
  position: absolute;
  top: 50%
  left:50%;
}
.gallery-box
{
  position: relative;
  margin-bottom: 30px;
}
.banner
{
  height: 80%;
  background-image: url(images/cover.jpg);
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  padding-top: 14%;
}
.banner-highlights
{
  padding: 70px 0;
  background: rgba(0, 0, 0, 0.7);
  text-align: center;
  color: #fff;

}
.booking-btn
{
  width: 120px;
  padding:8px 0; 
  outline: none !important;
  border: 2px solid #fff;
  border-radius: 50px;
  background: transparent;
  color: #fff;
  margin-top: 20px;
}
.User-feedback
{
  padding: 100px 0; 
}

</style>
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type=text/css
href=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css>

</head>
<body>
   <form action="hotelinfo_db.php" method = "post">
<section class = "features">
<h1>Available Destinations</h1>
<div class = "container">
<div class = "row">
<div class = "col-md-4">
    <div class= "feature-box">
    <div class= "feature-img">
    <a href="delhi3.php"> <img src = "images/delhi1.jpg"></a>
    <div class = "price">
        <p>&#8377;500</p>
  </div>
  <div class ="Ratings">
      <i class="fa fa-star"aria-hidden="true"></i>
      <i class="fa fa-star"aria-hidden="true"></i>  
      <i class="fa fa-star"aria-hidden="true"></i>
      <i class="fa fa-star"aria-hidden="true"></i>
      <i class="fa fa-star-half-o" aria-hidden="true"></i>
  </div>
  </div>
  <div class = "feature-details">
    <a href="delhi3.php"><h4>New Delhi</h4>
    <p>200+ more hotels</p>
    <div>
      <span><i class="fa fa-map-marker"aria-hidden="true"></i>New Delhi</span>
      <span><i class="fa fa-sun-o"aria-hidden="true"></i>4Days</span>
      <span><i class="fa fa-moon-o"aria-hidden="true"></i>3Nights</span>
    </div>
  </div>
</div></a>
<div class = "col-md-4"></div>
    <div class= "feature-box">
    <div class= "feature-img">
    <a href="mumbai3.php"> <img src = "images/Mumbai1.jpg"></a>
    <div class = "price">
        <p>&#8377;800</p>
  </div>
  <div class ="Ratings">
      <i class="fa fa-star"aria-hidden="true"></i>
      <i class="fa fa-star"aria-hidden="true"></i>  
      <i class="fa fa-star"aria-hidden="true"></i>
      <i class="fa fa-star-half-o"aria-hidden="true"></i>
      <i class="fa fa-star-o" aria-hidden="true"></i>
  </div>
  </div>
  <div class = "feature-details">
    <a href="mumbai3.php"> <h4>Mumbai</h4>
    <p>400+ more hotels</p>
    <div>
      <span><i class="fa fa-map-marker"aria-hidden="true"></i>Mumbai</span>
      <span><i class="fa fa-sun-o"aria-hidden="true"></i>5Days</span>
      <span><i class="fa fa-moon-o"aria-hidden="true"></i>4Nights</span>
    </div>
  </div>
</div></a>
</section>
<section class="gallery">
<h1>Travelling Gallery</h1>
<div class="container">
<div class="row">
<div class="col-md-3">
      <div class = "gallery-box">
        <img src="images/mysore.jpg">
        <h4>Mysore palace</h4>
  </div>
</div>
<div class="col-md-3">
      <div class = "gallery-box">
        <img src="images/kerala.jpg">
        <h4>Kerala</h4>
  </div>
</div>
<div class="col-md-3">
      <div class = "gallery-box">
        <img src="images/shimla.jpg">
        <h4>Shimla</h4>
  </div>
</div>
<div class="col-md-3">
      <div class = "gallery-box">
        <img src="images/manali.jpg">
        <h4>Manali </h4>
  </div>
</div>
</div>
</div>
</section>
<section class="banner">
    <div class = "banner-highlights">
      <div class= "container">
        <div class = "row">
          <div class="col-md-8">          
            <h2>Get 30% on top destinations</h2>
            <p>Book your tickets on top destintions before this month and avail 30% FLAT DISCOUNT.</p>
            </div>
            <div class="col-md-4">
                <button type = "button" class = "booking-btn">Book Now</button>
            
            </div>
          </div>
        </div>
    </div>
</section>  
</body>
</html>