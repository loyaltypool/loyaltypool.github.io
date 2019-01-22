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
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div class="container-fluid bg-light no-gutters p-0" style="color: #000;">
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
		<h2 class="p-2 pl-3 display-4 text-facebook" style="margin-bottom: 2rem;">
			<svg class="text-info svg-h2" id="i-user" viewBox="0 0 32 32" width="30" height="30" fill="currentcolor" stroke="none" 
				stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
		    	<path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
			</svg>
			facebook Integeration
		</h2>

		<h6 class="display-7 text-muted mt-4 pt-4 font-italic">Step 1: Like our page by clicking on the like button below.</h6>
		<div class="card mx-a" style="width: 18rem;min-height: 17rem;">
			<div class="card-body">
			    <div class="fb-page" data-href="https://www.facebook.com/jtmcommunity" data-small-header="false" 
					data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<blockquote cite="https://www.facebook.com/jtmcommunity" class="fb-xfbml-parse-ignore">
						<a href="https://www.facebook.com/jtmcommunity">JTM - Join The Movement</a>
					</blockquote>
				</div>
				<div class="text-left pt-2">
					<div class="fb-like" data-href="https://www.facebook.com/jtmcommunity" 
						data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
				</div>
			</div>
		</div>

		<h6 class="display-7 text-muted mt-4 pt-4 font-italic">
			Step 2: copy and send your community id as a facebook message to our page by clicking the message link below.
		</h6>

		<div class="card mx-a" style="width: 18rem;">
			<div class="card-body">
			    <div class="input-group mb-2">
				 	<input readonly type="text" class="form-control pl-4" value="id: ABC103F" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-right-radius: 0; border-bottom-right-radius: 0">
					<div class="input-group-append">
						<button class="btn btn-primary" type="button" 
							style="border-top-left-radius: 0; border-bottom-left-radius: 0">
							copy
						</button>
					</div>
				</div>
				<hr>
				<div class="fb-messengermessageus" 
					messenger_app_id="280739255953707"
				  	page_id="2729759003914892"
				  	color="blue"
				  	size="xlarge">
				  	<blockquote cite="https://m.me/jtmcommunity" class="fb-xfbml-parse-ignore">
						<a href="https://m.me/jtmcommunity">JTM - Join The Movement</a>
					</blockquote>
				</div>
			</div>
		</div>


		<small class="text-muted">facebook integration is done manually from our end and sometimes can take upto 24hours <br>
		 		after which your credit limit will be increased.
		</small>
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