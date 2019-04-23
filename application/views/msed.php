<!DOCTYPE html>
<html>
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
          <a class="nav-link text-dark" href="<?php echo base_url('home')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?php echo base_url('home/login');?>">Login</a>
        </li>
    </ul>
  </div>  
</nav>

<div class="container" id="tabs" style="margin-top: 80px">
  <nav class="navbar px-0 py-0 navbar-expand-sm bg-transparent border-bottom row">
    <div class="nav nav-tabs nav-fill row" id="nav-tab" role="tablist" style="border-bottom: none;">
      <a class="px-3 my-0 nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Models</a>
      <a class="px-3 my-0 nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Services</a>
      <a class="px-3 my-0 nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Exclusive Offer</a>
      <a class="px-3 my-0 nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Discover</a>
    </div>
    <img src="">
    <a href="home.html">
      <img src="img/navx.png" alt="" style="padding-left: 720px">
    </a>
  </nav>
    <div class="tab-content" id="nav-tabContent">

    <!--Tab Models-->
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="d-flex justify-content-center">
          <img src="img/model.png" alt="">
        </div>
        <div class="d-flex justify-content-center">
          <button type="button" class="btn-bmw" href="allmodels.html">All Models</button>
        </div>
        <div class="row" style="margin-top: 100px">  
        <div class="col-sm-3">
          <a class="item-model" href="" style="text-decoration: none">BMW M
            <img src="img/item.png" alt="" style="margin-left: 125px;">
          </a>
        </div>
        <div class="col-sm-3">
          <a class="item-model" href="" style="text-decoration: none">BMW Corporate Sales
            <img src="img/item.png" alt="" style="margin-left: 20px;">
          </a>
        </div>
        <div class="col-sm-3">
          <a class="item-model" href="" style="text-decoration: none">BMW Luxury Class
            <img src="img/item.png" alt="" style="margin-left: 43px;">
          </a>
        </div>
        <div class="col-sm-3">
          <a class="item-model" href="" style="text-decoration: none">BMW Individual
            <img src="img/item.png" alt="" style="margin-left: 40px;">
          </a>
        </div>
      </div>
      <div class="row" style="margin-top: 40px">
        <div class="col-sm-3">
          <a class="item-model" href="" style="text-decoration: none">BMW Efficient Dynamics
            <img src="img/item.png" alt="">
          </a>
        </div>
        <div class="col-sm-3">
          <a class="item-model" href="" style="text-decoration: none">BMW xDrive
            <img src="img/item.png" alt="" style="margin-left: 90px;">
          </a>
        </div>
        <div class="col-sm-3">
          <a class="item-model" href="" style="text-decoration: none">BMW Premium Selection
            <img src="img/item.png" alt="">
          </a>
        </div>
        <div class="col-sm-3"></div>
      </div>
        <div style="margin-top:100px">
          <h3>Quick Actions</h3>
          <br>
          <div class="row text-center">
            <div class="col-sm-4">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Test Drive</p>
            </div>
            <div class="col-sm-4"> 
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Find A Retailer</p>    
            </div>
            <div class="col-sm-4"> 
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Contact Us</p>    
            </div>
          </div>
        </div>
      </div>

    <!--Tab Services-->
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div style="margin-top:100px">
          <h3>Choose Service</h3>
          <br>
          <div class="row text-center">
            <div class="col-sm-4">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Spare Parts</p>
            </div>
            <div class="col-sm-4"> 
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Maintenance</p>    
            </div>
            <div class="col-sm-4"> 
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Modifications</p>    
            </div>
          </div>
        </div>
      </div>

    <!--Tab Exclusive Offer-->
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div style="margin-top:100px">
          <h3>Quick Actions</h3>
          <br>
          <div class="row text-center">
            <div class="col-sm-4">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Current Project</p>
            </div>
            <div class="col-sm-4"> 
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Project 2</p>    
            </div>
            <div class="col-sm-4"> 
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Project 2</p>    
            </div>
          </div>
        </div>
      </div>

    <!--Tab Discover-->
      <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
        <div style="margin-top:100px">
          <h3>Quick Actions</h3>
          <br>
          <div class="row text-center">
            <div class="col-sm-4">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Current Project</p>
            </div>
            <div class="col-sm-4">                 <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Project 2</p>    
            </div>
            <div class="col-sm-4"> 
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image">
              <p>Project 2</p>    
            </div>
          </div>
        </div>
      </div>
  </div>
</div>


</body>

</html>