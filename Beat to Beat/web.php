<!DOCTYPE html>
<html>
<head>
<title>Beattobeat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
 
<script src="js/jquery.js"></script>
   
 <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
 body{
    background-image: url(images/bg.jpg);
 }
 .navbar-inverse
   {
    background-color:transparent;
    border:none;
   }
    .navbar-inverse ////.navbar-nav>li>a {
    color: white;
	}
	 .navbar-inverse .navbar-nav>li>a:hover {
    color: hotpink;
}
   ////.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
   
   //// background-color:transparent;
}
.hover1:hover
{
    background-color: hotpink;
}
.hover1
{
    background-color: purple;
}
a#btn
{
    padding: 13px 23px;
    color: white;
    background-color: #CA009C;
    float: right;

}
a#btn:hover
{
    text-decoration: none;
    background-color: black;
    color: white;
}
 </style>



 </head>
 
 <body>
 
 <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo.png" style="height: 50px;width: 150px;" /></a>
    </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     
      <ul class="nav navbar-nav navbar-right" style="padding-top: 45px;">
        <li><a href="web.html"> HOME</a></li>
        <li><a href="about1.html"> ABOUT</a></li>
        <li><a href="events.html"> EVENTS</a></li>
        <li><a href="gallary.html"> GALLERY</a></li>
        <li><a href="blog.html"> BLOG</a></li>
        <li><a href="contact1.html"> CONTACT</a></li>
      </ul>
    </div>
  </div>
  </nav>
  <div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
   <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/1.jpg" alt="Chania" style="width: 100%;height: 350px;">
      
    </div>

    <div class="item">
      <img src="images/2.jpg" alt="Chania" style="width: 100%;height: 350px;">
      
    </div>

    <div class="item">
      <img src="images/3.jpg" alt="Flower" style="width: 100%;height: 350px;">
     
    </div>

    <div class="item">
      <img src="images/4.jpg" alt="Flower" style="width: 100%;height: 350px;">
      
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br><br>
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="hover1" style="padding: 25px;border: 1px solid transparent;">
<img src="images/event_1.jpg" style="height: 150px;width: 100%;" class="img-rounded"><h1 style="color: white">05 March</h1>
</div>
</div>
<div class="col-md-4">
<div class="hover1" style="padding: 25px;border: 1px solid transparent;">
 <img src="images/event_2.jpg" style="height: 150px;width: 100%;" class="img-rounded"><h1 style="color: white">05 March</h1></div>
</div>
<div class="col-md-4">
<div class="hover1" style="padding: 25px;border: 1px solid transparent;">
 <img src="images/event_3.jpg" style="height: 150px;width: 100%;" class="img-rounded"><h1 style="color: white">05 March</h1></div>
</div>
</div>
</div>

<div class="container" style="margin-top: 50px;">
<div class="row">
<div class="col-md-6"><p style="color: white;font-size:35px;">HOUSE FULL SHOW</p>
<img src="images/today_show.jpg" style="width: 100%;height: 250px;" />
 <h1 style="color: white;">7 May</h1>
 <h4 style="color: hotpink;">The workshop held at Sangli between 21-April-201 To 07-May-2017 has one of the best hit workshop. We need to close registration just in some hours as seats are house full.</h4>
</div>
<div class="col-md-6">
<p style="color: white;font-size:35px;">LATEST PICTURES</p><img src="images/videos.jpg"  style="width: 100%;height: 250px;" /><h4 style="color: hotpink;">Here are some of the latest pics of our workshop. Enjoy!</h4>
<a href="gallery.html" id="btn">See All</a>
</div>
</div>
</div>
<div class="container-fluid" style="margin-top: 50px;background-color: rgba(70, 0, 77, 0.22);">
<div class="container" >
<div class="row" style="padding-top: 40px;padding-bottom: 40px;">
<div class="col-md-4">
<h2 style="color: white;">Our Latest feeds</h2>
<h4 style="color: white;">Workshop in Sangli on June-2016
High response workshop in Sangli in July-2016
Waiting list registration in sangli in August-2016.
</h4>
</div>
<div class="col-md-2"><img src="images/f-icon.png" >
</div>
<div class="col-md-4">
<h2 style="color: white;">Catch us on
</h2>
<h4 style="color: white;">Facebook - Beat to Beat dance crew
Instagram - Beat to Beat dance crew
</h4>
</div>
<div class="col-md-2"><img src="images/foot-icon.png">
</div>
</div>
</div>
</div>
<div class="container" >
<div class="row">
    <div class="col-md-12" style="text-align: center;padding-top: 15px;padding-bottom: 15px;color: white;"> 


    ?? 2017 Rights Reseverd | Design by Advent Technologies


    </div>
</div>

</div>
 </body>
 </html>