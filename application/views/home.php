<!DOCTYPE html>
<html lang="en">
<head>
  	<title>BMW Indonesia</title>
  	<link rel="icon" type="image/gif/png" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/additional.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/additional.css'); ?>">
</head>

<body>

<nav class="navbar container fixed-top navbar-expand-sm bg-transparent border-bottom">
  	<a class="navbar-brand order-md-last" href="home.html">
  		<img src="img/logo2.png" alt="" width="90px" height="98px">
  	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  	<span class="navbar-toggler-icon"></span>
  	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav font-weight-bold">
      	<li class="nav-item">
        	<a class="nav-link text-light" href="<?php echo base_url('home/msed')?>">Models</a>
      	</li>
      	<li class="nav-item">
        	<a class="nav-link text-light" href="<?php echo base_url('home/msed');?>">Services</a>
      	</li>
      	<li class="nav-item">
        	<a class="nav-link text-light" href="<?php echo site_url('home/msed');?>">Exclusive Offer</a>
      	</li>
      	<li class="nav-item">
        	<a class="nav-link text-light" href="<?php echo site_url('home/msed');?>">Discover</a>
      	</li>
        <li class="nav-item">
          <a class="nav-link text-light" href="home/login">Login</a>
        </li>   
    </ul>
  </div>  
</nav>

<nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light border-top">
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item active">
                <a class="nav-link" href="#">Dealer Locator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricelist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/a.jpg'); ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/b.jpg'); ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/c.jpg'); ?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/d.jpg'); ?>" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/e.jpg'); ?>" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/f.jpg'); ?>" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/g.jpg'); ?>" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/h.jpg'); ?>" alt="Eighth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/i.jpg'); ?>" alt="Ninth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/j.jpg'); ?>" alt="Tenth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/k.jpg'); ?>" alt="Eleventh slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<div class="container" id="tabs" style="margin-top: 100px">
  <nav class="navbar px-0 py-0 navbar-expand-sm bg-transparent border-bottom row">
    <div class="nav nav-tabs nav-fill row" id="nav-tab" role="tablist" style="border-bottom: none">
      <a class="px-3 my-0 nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-size: 18px">Models</a>
      <a class="px-3 my-0 nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="font-size: 18px">Services</a>
    </div>
  </nav>
    <div class="tab-content" id="nav-tabContent">

    <!--Tab Models-->
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div style="margin-top: 100px">  
        </div>
      </div>

    <!--Tab Services-->
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div>
        <div id="tabs">
          <nav class="navbar px-0 py-0 navbar-expand-sm bg-transparent border-bottom row">
            <div class="nav nav-tabs nav-fill row" id="nav-tab" role="tablist" style="border-bottom: none">
              <a class="px-3 my-0 nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-size: 18px">Models</a>
              <a class="px-3 my-0 nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="font-size: 18px">Services</a>
            </div>
          </nav>
            <div class="tab-content" id="nav-tabContent">

            <!--Tab Models-->
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div style="margin-top: 100px">  
                </div>
              </div>

            <!--Tab Services-->
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div style="margin-top:100px">
                </div>
              </div>
          </div>
        </div>
        </div>
      </div>
  </div>
</div>

<div class="container" style="margin-top:100px">
	<div class="row">
    	<div class="col-sm-6 border">
      	<div style="margin-top:15px">
      		<img src="img/1.jpg" alt="">
      	</div>
      	<h2 class="font-weight-bold">DRIVING LUXURY.</h2>
      	<p>An embodiment of maximum luxury that resonates success. Quintessential driving pleasure that spells passion. This is the BMW 7 Series. </p>
      	<a class="btn-link" href="#">>Find Out More</a>
    </div>
    <div class="col-sm-6  border">
    	<div style="margin-top:15px">
    		<img src="img/2.jpg" alt="">
    	</div>
      	<h2 class="font-weight-bold">REQUEST FOR INFORMATION</h2>
      	<p>Download brochures here.</p>
      	<a class="btn-link" href="#">>Find Out More</a>
    </div>
  	</div>
  	<div class="row" style="margin-top:30px">
  		<div class="col-sm-6 border">
  			<div style="margin-top:15px">
  				<img src="img/3.jpg" alt="">
  			</div>
      		<h2 class="font-weight-bold">BMW-M.COM</h2>
     		<p>The new website of the most powerful letter in the world.</p>
     		<a class="btn-link" href="#">>Find Out More</a>
  		</div>
  	</div>
</div>

<div class="container" style="margin-top:100px">
  <h3>Quick Actions</h3>
  <br>
  <div class="row text-center">
    <div class="col">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:15%" alt="Image">
      <p>Configurator</p>
    </div>
    <div class="col"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:15%" alt="Image">
      <p>Financial Solutions</p>    
    </div>
    <div class="col"> 
      <img src="assets/img/navloc.png" class="img-responsive" style="width:15%" alt="Image">
      <p>Find Your Retailer</p>
    </div>
    <div class="col"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:15%" alt="Image">
      <p>Pricelist</p>
    </div> 
    <div class="col"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:15%" alt="Image">
      <p>Contact Us</p>
    </div>     
  </div>
</div>

<footer>
  <div style="margin-top:300px">
  </div>
</footer>

</body>
</html>
