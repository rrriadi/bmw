<!DOCTYPE html>
<html>
<head>
	<title>Maintenance Form</title>
	<link rel="icon" type="image/gif/png" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/additional.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
          <a class="nav-link text-light" href="<?php echo site_url('/msed.php');?>">Models</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?php echo site_url('/msed.php');?>">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?php echo site_url('/msed.php');?>">Exclusive Offer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?php echo site_url('/msed.php');?>">Discover</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="Login.html">Login</a>
        </li>   
    </ul>
  </div>  
</nav>

	<h2 style="margin-top: 25px">Service Form</h2>

	<form>
  <div class="form-group">
    <label for="carmodel">Car Model</label>
    <input type="carmodel" class="form-control" id="carmodel" placeholder="Enter Your Car Model">
  </div>
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Type
    <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Service</a></li>
    <li><a href="#">Maintenance</a></li>
    <li><a href="#">Modifications</a></li>
  </ul>
</div>
  <div class="form-group">
    <label for="regnum">Registration Number</label>
    <input type="regnum" class="form-control" id="regnum" placeholder="Car Registration Number">
  </div>
  <div class="form-group">
    <label for="complaint">Inquiry</label>
    <textarea class="form-control" id="complaint" rows="5">
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>