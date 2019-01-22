<?php
session_start();
if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
	header("location: login.html");
	exit;
}
//$getter = new DBRequest();

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
<body>

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
	</div>
</div>
<div class="row no-gutters justify-content-center">

	<div class="col-sm-7 text-center jtm-form-center mx-1">
		<h2 class="p-2 pl-3 display-4 text-twitter" style="margin-bottom: 2rem;">
			<svg class="text-twitter svg-h2" id="i-user" viewBox="0 0 32 32" width="30" height="30" fill="currentcolor" stroke="none" 
				stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
		    	<path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
			</svg>
			twitter Integeration
		</h2>

		<h6 class="display-7 text-muted mt-4 pt-4 font-italic">Step 1: Click the button below to follow JTM on twitter</h6>
		<div class="card mx-a" style="">
			<div class="card-body">
				<a href="https://twitter.com/jtmcommunity" class="twitter-follow-button" data-size="large" data-lang="en" 
					data-show-count="false" data-show-screen-name="true">Follow @JTMcommunity</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>

		<h6 class="display-7 text-muted mt-4 pb-2 pt-4 font-italic">Step 2: Enter your twitter handle into the box below then click confirm to complete</h6>
		<div class="input-group mb-4 px-4">
			<div class="input-group-append">
				<button class="btn bg-twitter text-light" type="button" 
					style="border-top-right-radius: 0; border-bottom-right-radius: 0;
						border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
					@
				</button>
			</div>
		 	<input type="text" class="form-control pl-4" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px" placeholder="Enter twitter handle here" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-right-radius: 0; border-bottom-right-radius: 0">
		</div>
		<div class="px-2"><button class="btn bg-twitter text-white btn-lg px-4 ">Confirm</button></div>

		<div class="text-center">
			<small class="text-muted display-small text-left font-italic">twitter integration is done manually from our end 
				<br>and sometimes can take upto 24hours to increase your credit limit.
			</small>
		</div>
		






		
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