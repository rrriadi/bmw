<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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

	<div class="container" id="tabs">
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
          <a class="nav-link text-dark" href="<?php echo base_url('home/msed')?>">Models</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?php echo base_url('home/msed');?>">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?php echo site_url('home/msed');?>">Exclusive Offer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?php echo site_url('home/msed');?>">Discover</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="home/login">Login</a>
        </li>   
    </ul>
  </div>  
</nav>
  <div class="container" style="margin-top: 80px">
    <form action="<?php echo base_url().'/home/regist';?>">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email" name="email">
    </div>
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="firstname" class="form-control" id="firstname" placeholder="First Name" name="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="lastname" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="address" class="form-control" id="address" placeholder="Address" name="address">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

</body>
</html>