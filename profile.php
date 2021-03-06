<?php
session_start();
if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
	header("location: login.html");
	exit;
}
if (isset($_SESSION['profile-updated']) && $_SESSION['profile-updated'] == true){
	header("location: dashboard.php");
	exit;
}

?>
<!Doctype html>
<html>
<head>
	<title>JTM - Join The Movement</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap_extended.css">
</head>
<body onload="new Main().LoadProfilePage()">
<div class="container-fluid bg-white no-gutters p-0" style="color: #000;">
<div class="row no-gutters justify-content-start">
	<div class="col">
		<nav class="navbar navbar-light">
		  <a class="navbar-brand" href="#">JTM</a>
		  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
		  	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
  		</nav>
		<hr class="m-0">
		<div class="bg-warning text-white text-center">
			<small>A verification link had been sent to your email, kindly check spam as well.
				<a class="text-white text-muted text-underline" href="#">Resend</a>
			</small>
		</div>
	</div>
</div>
<div class="row no-gutters justify-content-center">
	<div class="col-sm-7 text-center jtm-form-center mx-1">
		<h2 class="text-left p-2 pl-3 bg-light jtm-h2" style="margin-bottom: 1rem;">
			<svg class="text-info svg-h2" id="i-user" viewBox="0 0 32 32" width="30" height="30" fill="currentcolor" stroke="none" 
				stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
		    	<path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
			</svg>
			Profile
		</h2>
		<div class="text-muted font-italic">
			Update profile to complete registration,
			use name as is on bank account to avoid any withdrawal issues
		</div>
		<form class="text-left mt-4 mx-2" id="profile-form" onsubmit="return false">
			<div class="alert alert-danger text-left d-none" id="alert-box" role="alert">
				Error updating profile, please try again!
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Surname</label>
			<input type="text" class="form-control" id="surname" required placeholder="Surname">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">First Name</label>
			<input type="text" class="form-control" id="first-name" required placeholder="First Name">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Other names (Optional)</label>
			<input type="text" id="other-names" class="form-control" placeholder="Other names">
			</div>
			<div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" readonly value="email@gmail.com">
			</div>
			<div class="form-group">
		    <label for="exampleFormControlSelect1">Country</label>
		    <select id="country" class="form-control">
		      <option value="Nigeria">Nigeria</option>
		    </select>
		  	</div>
		  	<div class="form-group">
		    <label for="exampleFormControlSelect1">State</label>
		    <select id="state" class="form-control">
		      <option disabled selected value="0">&lt;select state&gt;</option>
		      <option value="Lagos">Lagos</option>
		    </select>
		  	</div>
		  	<div class="form-group">
			<label for="exampleInputEmail1">Phone</label>
			<input type="tel" id="phone" class="form-control" required value="+234">
			</div>
			<button type="submit" class="btn btn-primary">Update profile</button>
			<img src="img/loader1.gif" id="submit-loader" class="d-none" alt="o" width="20" height="20">
			<a id="submit-text" href="javascript:void(0)" style="visibility: hidden" class="ml-1" >edit</a>
		</form>
	</div>
</div>
</div>
<!--
<div class="bg-light">
	<hr class="m-0">
	<nav>Toye</nav>
</div>
-->

<!--JavaScripts-->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jtm.js"></script>
</body>
</html>