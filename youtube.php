<?php
session_start();
if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
	header("location: login.html");
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
		<h2 class="p-2 pl-3 display-4 text-youtube" style="margin-bottom: 2rem;">
			YouTube integeration
		</h2>

		<h6 class="display-7 text-muted mt-4 pt-4 font-italic">Step 1: Copy your community id from the box below</h6>
		<div class="card mx-a" style="width: 18rem;">
			<div class="card-body">
				<div class="input-group mb-4 pb-4">
				 	<input disabled type="text" class="form-control pl-4" value="id: ABC103F" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-right-radius: 0; border-bottom-right-radius: 0">
					<div class="input-group-append">
						<button class="btn btn-secondary" type="button" 
							style="border-top-left-radius: 0; border-bottom-left-radius: 0">
							copy
						</button>
					</div>
				</div>
			</div>
		</div>

		<!--
		<script src="https://apis.google.com/js/platform.js"></script>
				<div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="full" data-count="default"></div>
		-->

		<h6 class="display-7 text-muted mt-4 pb-2 pt-4 font-italic">Step 2: Subscribe to our youtube channel by clicking the link below and comment your community id on any of our videos on youtube</h6>
		<script src="https://apis.google.com/js/platform.js"></script>
		<div class="g-ytsubscribe" data-channelid="UCV9T_XlHz28__NPog_6jDXg" data-layout="full" data-count="hidden"></div>

		<div class="text-center">
			<small class="text-muted display-small text-left font-italic">youtube integration is done manually from our end 
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