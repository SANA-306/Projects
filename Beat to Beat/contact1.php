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
   .navbar-inverse .navbar-nav>li>a {
    color: white;
	}
	 .navbar-inverse .navbar-nav>li>a:hover {
    color: hotpink;
}
 label
 { 
color:white;
 }
 h1{ 
   color:white;
   }
   h5{
   color:#F39EEF;
   line-height:1.4;
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
        <li><a href="web.html"> <h3>HOME</h3></a></li>
        <li><a href="about1.html"><h3>ABOUT</h3></a></li>
        <li><a href="events1.html"><h3>EVENTS</h3></a></li>
        <li><a href="gallery1.html"><h3>GALLERY</h3></a></li>
        <li><a href="blog1.html"><h3> BLOG</h3></a></li>
        <li><a href="contact1.php"><h3> CONTACT</h3></a></li>
      </ul>
    </div>
  </div>
  </nav>
  
  <div class="container">
  <div class="row">
  <div class="col-md-4">
  <h1>Get In Touch</h1>
  
  <form class="form-horizontal" action="contact_action.php" method="post"><!--all in horizontal line-->
  <div class="form-group"><!--take label and textbox in group-->
  <label class="control-label col-sm-2"><!--apply control-label class to label-->
  Name: </label>
  <div class="col-sm-10">
  <input type="text" class="form-control" name="name" placeholder="Enter Name" style="background-color:transparent; color:white; border: 1px solid grey;"><!--apply form-control class here-->
  </div>
  </div>
  
  <div class="form-group">
  <label class="control-label col-sm-2">Email: </label>
  <div class="col-sm-10">
  <input type="text" class="form-control" name="email" placeholder="Enter Email" style="background-color:transparent; color:white; border: 1px solid grey;">
  </div>
  </div>
  
  <div class="form-group">
  <label class="control-label col-sm-2">Message: </label>
  <div class="col-sm-10">
  <textarea class="form-control" name="msg" placeholder="Enter Message" style="background-color:transparent; color:white; border: 1px solid grey;"></textarea>
  </div>
  </div>
  
  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10"><!-- offset used to skip first 2 col and start from next 10 col-->
  <input type="submit" class="btn btn-warning">
  </div>
  </div>
  
  </form>
  </div>
  
  <div class="col-md-2">
</div>
  
  
  <div class="col-md-4">
  <h1 >Address</h1>
  <h5>Beat to Beat Dance Crew,<br>
  3rd Floor, Above Amul Ice-Cream,<br>
  Near Ram Vishwas Dairy,<br>
  Chandni Chowk,<br>
  Sangli,Maharashtra,<br>
  Phone:(+91) 96 37 253 572<br><br>
  Email:<a href="support@dancebeat2beat.com">support@dancebeat2beat.com</a><br></br>
  Follow on:<a href="www.Facebook.com">Facebook</a><br> 
</h5>
</div>

<div class="col-md-2">
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


    © 2017 Rights Reseverd | Design by Advent Technologies


    </div>
</div>

</div>
  </body>
  </html>