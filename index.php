<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

<style>
body {
  background-color: grey;
  background-image: url("images/background.jpg");
}

.header-img {
  background-image: url("images/header.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  opacity: 10;
}

.h2 {
  font: 400 130px/0.8 'Great Vibes', Helvetica, sans-serif;
  color: #fff;
  text-shadow: 4px 4px 3px rgba(0,0,0,0.1); 
}
</style>
</head>

<body>

<nav class="navbar navbar-inverse" style="margin-bottom: -10px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Bistros | Jacksonville, FL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right"> 
        </li>
            <li><a href="#"> Reservations |</a></li>
            <li><a href="#"> Jobs |</a></li>
            <li><a href="#"> Contact Us</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"></span>1-800-123-4567</a></li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="container-fluid text-center header-img" style="padding-bottom: 150px;">
  <div class="row">
    <div class="col-md-12" style="padding-bottom: 100px; color: white; padding-top: 100px;">
      <h1>Voted Best New Restaurant in Jax!</h1>
    </div>
  </div>

<!-- //ADD A BUTTON  -->
  <div class="row">
    <div class="col-md-12" style="padding-bottom: 180px; color: white;">
      <button class="btn btn-info btn-lg" style="margin-top: -60px" >Order Online</button>
    </div>
  </div>        
</div>



<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
  <div class="row">
    <div class="col-md-12 text-center " style="padding-bottom: 50px"><h1>Our Menu</h1></div>
</div>


<!-- //CLASS & ROWS -->

  <div class="row">
    <div class="col-md-4 text-center"><img src="images/breakfast.jpg"class="img-thumbnail"style="width: 90%; opacity: .9; border-radius: 10%;" alt=""><h3>Breakfast</h3>
    </div>
      
    <div class="col-md-4 text-center"><img src="images/lunch.jpg"class="img-thumbnail"style="width: 90%; opacity: .9; border-radius: 10%;" alt=""><h3>Lunch</h3>
    </div>

    <div class="col-md-4 text-center"><img src="images/dinner.jpg"class="img-thumbnail"style="width: 90%; opacity: .9; border-radius: 10%;" alt=""><h3>Dinner</h3>
    </div>
  </div>
  </div>
  
<br>
<br>

<!-- //OUR CHEF -->

<div class="container">
  <div class="row">
  <p class="lead"style="padding-top: 50px;"> </p>
    <div class="col-md-6 text-left h2" style="color: black;">
    <h3>Our Chef: José Engles</h3>
    <p class="lead"><img src="images/chef2.jpg" alt="" style="float: right; padding-right: 10px; padding-left: 5px;">
    Our chef is world renowned cook José Engles. With months of experience (his entire life), José brings a professionalism and perfectionist attitude to the kitchen. He has appeared on the Kiddie Food Network, competed in several Young Iron Chef battles, but has decided to bring his infant talents to Jacksonville and elevate the growing food scene.</p>
    <p class="lead"style="padding-top: 10px;">Questions for our chef? Let us know! Recommedations for our menu? We'll take 'em!</p>
    
<i class="fab fa-facebook-square"style="font-size: 60px;"></i> 
<i class="fab fa-twitter-square"style="font-size: 60px; padding-left: 12px;"></i>
<i class="fas fa-rss-square"style="font-size: 60px; padding-left: 12px;"></i> 

<!-- //REVIEWS -->

    </div>
    <p class="lead"style="padding-top: -5px;"> </p>
    <div class="col-md-6 text-left h2" style="color: black;">
      <h3>Reviews</h3>
      <p class="lead"><img src="images/reviewer2.jpg" alt="" style="float: left; padding-right: 10px;">
      The breakfast food here is awesome. Pro tip: ask for the eggs on the secret menu. If you like scrambled easy, then you will love the secret menu special. This is your new brunch place! You're welcome!</p>

      <hr style="border-top: 1px solid black;">

      <p class="lead"><img src="images/reviewer1.jpg" alt="" style="float: left; padding-right: 10px;">
      Everybody's raving about the breakfast but I had the best lunch here! The secret menu sandwich is what you want. Go now before it gets too well-known. You'll enjoy every minute! Shout out to Chef Engles who made the overal experience totally worthwhile.</p>

      <hr style="border-top: 1px solid black;">

      <p class="lead"><img src="images/reviewer1.jpg" alt="" style="float: left; padding-right: 10px;">
      Everybody's raving about the breakfast but I had the best lunch here! The secret menu sandwich is what you want. Go now before it gets too well-known. You'll enjoy every minute! Shout out to Chef Engles who made the overal experience totally worthwhile.</p>
    </div>

  </div>
</div>

<br>
<br>

<div class="container">
  <div class="row"style="padding-bottom: 12px;">
    <div class="col-md-4 text-left"><h4>Copyright 2018 Bistros, LLC</h4> 
  </div>
  <div class="col-md-4 text-center"><h4>Bistros 123 Main Street Jacksonville, FL</h4>  
  </div>
  <div class="col-md-4 text-right"><h4>Privacy Policy | Terms of Use</h4>
  </div>
</div>




</nav>











</body>
</html>

