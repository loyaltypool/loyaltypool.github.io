<?php
session_start();
if (isset($_SESSION['email']) && $_SESSION['email'] != ''){
	header("location: dashboard.php");
	exit;
}

/*if (isset($_GET['ref']) && $_GET['ref'] != ''){
	$_SESSION['ref'] = $_GET['ref'];
}*/
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
<body onload="" style="
	background-image: url('img/community1');
	background-repeat: no-repeat;
	background-size: cover;
	background-scroll: fixed;
	">

<div class=" mx-a">
<div class="pt-4 row no-gutters px-2 py-2">
	<div class="col col-sm-9 col-lg-7 text-center mx-a" style="font-family: georgia;box-shadow: 0 0 0 #EEE">
		<!--<nav class="navbar navbar-light bg-white">
			<a class="navbar-brand" href="#">JTM</a>
			<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			   	<span class="navbar-toggler-icon text-light"></span>
			</button>
		</nav>
		<hr>-->


		<br><br>
		<img src="img/jtm1.png" style="width: 100%">
		<br><br><br>
		<h1>JTM</h1>
		<h4 class="text-muted">Join The Movement!</h4>
		<hr>
		<hr>
		<div class="text-muted">
			<div class="d-table mx-a" style="padding: 16px ;background-color: rgba(0, 0, 0, .1);border-radius: 100%">
				<img alt="JTM LOAN" src="img/money-bag.png" width="64px" height="64px">
			</div>
			Become a JTM MEMBER and get access 
			<br> to our FREE COMMUNITY LOAN.
		</div>
		<hr>
		<hr>

		<div >
			Becoming a JTM MEMBER is 100% free and takes only 3 easy steps.
		</div>

		<div class="row no-gutters text-center py-4">
		<div class="col">
			<div class="row no-gutters text-center px-4">
				<div class="col-12 col-sm-6 mx-a col-lg-3 pb-4 px-4">
					<div class="d-table mx-a" style="padding: 16px ;background-color: rgba(0, 0, 0, .);border-radius: 100%">
						<img alt="Sign Up" src="img/log-in.png" width="64px" height="64px">
					</div>
					<h4 class="pt-2">Step 1</h4>
					<p>
						Get started by signing up with us
					</p>
				</div>

				<div class="col-12 col-sm-6 mx-a col-lg-3 px-4 pb-4">
					<div class="d-table mx-a" style="padding: 16px ;background-color: rgba(0, 0, 0, .);border-radius: 100%">
						<img alt="Connect Social Media" src="img/social-media.png" width="64px" height="64px">
					</div>
					<h4>Step 2</h4>
					<p>
						Connect Your Social Media accounts.
					</p>
				</div>

				<div class="col-12 mx-a col-sm-6 col-lg-3 px-4 pb-4">
					<div class="d-table mx-a" style="padding: 16px ;background-color: rgba(0, 0, 0, .);border-radius: 100%">
						<img alt="Referral" src="img/affiliate.png" width="64px" height="64px">
					</div>
					<h4>Step 3</h4>
					<p>
						Refer atleast 2 of your Family and Friends.
					</p>
				</div>
			</div>
		</div>
	</div>


		<small>Once your application is accepted you instanteously get access to your N6,000 FREE JTM COMMUNITY LOAN.</small>
		<br>
		<a href="register.html" class="btn btn-outline-success p-2 btn-block my-2 display-10 display-sm-9" style="border-width: 5px;">
			<img alt="Sign Up" src="img/log-in.png" width="24px" height="24px">
			<span style="">Get Started!</span>
		</a>
	</div>

</div>
</div>
<hr>
<hr>
<div style="font-family: georgia;box-shadow: 0 0 0 black">
	<h4 class="text-center">FAQs</h4>
	<div class="row no-gutters text-left">
	  	<div class="col-12 col-sm-6 col-md-4 px-2 pb-2">
	    	<div class="card border-primary text-primary">
	      		<div class="card-body">
	        		<h5 class="card-title">What is Free loan?</h5>
	        		<p class="card-text">
	        			<small>
		        			JTM is not focused a credit facility app.
							We are focused on the familiness and oneness of our community
							That's why we give out free loans to members of our coummunity.
							<br>
							Free Loans are loans where you dont have to pay back with intrest
							and can pay back at your convienient time.
	        			</small>
	        		</p>
	      		</div>
	    	</div>
		</div>

	  	<div class="col-12 col-sm-6 col-md-4 px-2 pb-2">
		    <div class="card border-success text-success">
		      	<div class="card-body">
		        	<h5 class="card-title">What happens if I dont pay back my loan?</h5>
		        	<p class="card-text">
		        		<small>
			        		Nothing! Thats right, Absolutely Nothing!
							<br>
							Unlike other loan apps, we wont forcefully take out your loan from your bank account,
							but rather at your convienient time.
							<br>
							In JTM, we see each debt as good debt and we are focused in the growth of our community
							rather than our interest.
							<br>
							However, only members that pay back their loan on time will be eligible for another
							and your loan limit increses depending on how soon you are paying back.
						</small>
		        	</p>
		      	</div>
		    </div>
		</div>

	  	<div class="col-12 col-sm-6 col-md-4 px-2 pb-2">
	    	<div class="card border-dark text-dark">
		      	<div class="card-body">
		        	<h5 class="card-title">How does JTM make money!</h5>
		        	<p class="card-text">
		        		<small>
			        		Well no one likes revealing their money making secrets but we are not just anyone, we are JTM!
							<br>
							JTM makes money through branding, campaigns, ads, through the growth of our community,
							and other online and offline activities!
							<br>For us,  transparency and integrety is key!
						</small>
		        	</p>
		      	</div>
	    	</div>
	  	</div>
	</div>

	<div class="px-2 text-center">
		<small class="text-muted"> Well, enough of the FAQs, go ahead and get started!</small><br>
		<a href="register.html" class="btn btn-outline-success p-2 btn-sm btn-block my-2 display-10 display-sm-9" style="border-width: 5px;">
				<img alt="Sign Up" src="img/log-in.png" width="24px" height="24px">
				<span style="">Get Started!</span>
		</a>

		<br><small class="text-muted">Kindly refer every other questions to our facebook community group</small><br>
		<button class="btn bg-facebook text-white px-4 btn-block display-10 display-sm-9">
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="24px" height="24px" viewBox="0 0 60.734 60.733" fill="white" stroke="none"
				 xml:space="preserve">
			<g>
				<path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914
					v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462
					v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z"/>
			</g>
			</svg>
			<small style="position: relative;bottom: 5px">Join JTM Community Group</span>
		</button>
	</div>
</div>

<div class="row no-gutters text-center pt-4">
		<div class="col bg-dark">
			<hr class="mt-0 pt-0">
			<div class="row no-gutters text-center px-4">
				<div class="col-12 col-sm-6 mx-a col-lg-3 pb-4 px-4">
					<button class="btn bg-facebook text-white px-4 display-10 display-sm-9" style="width: 198px">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="24px" height="24px" viewBox="0 0 60.734 60.733" fill="white" stroke="none"
							 xml:space="preserve">
						<g>
							<path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914
								v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462
								v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z"/>
						</g>
						</svg>
						<small class="text-muted" style="position: relative;bottom: 5px">@jtmcommunity</small>
					</button>
				</div>

				<div class="col-12 col-sm-6 mx-a col-lg-3 px-4 pb-4">
					<button class="btn btn-success text-white px-4 display-10 display-sm-9" style="width: 198px">
						<img alt=" " src="img/whatsapp2.png" width="24px" height="24px">
						<small class="text-dark">+234-808-111-9325</small>
					</button>
				</div>

				<div class="col-12 mx-a col-sm-6 col-lg-3 px-4 pb-4">
					<button class="btn bg-youtube text-white px-4 display-10 display-sm-9" style="width: 198px">
						<img alt=" " src="img/youtube.png" width="24px" height="24px">
						<small style="color: #999">\JTM Community</small>
					</button>
				</div>

				<div class="col-12 mx-a col-sm-6 col-lg-3 px-4 pb-4">
					<button class="btn btn-warning text-white px-4 display-10 display-sm-9" style="width: 198px">
						<img alt=" " src="img/instagram.png" width="24px" height="24px">
						<small class="text-light">@jtmcommunity</small>
					</button>
				</div>

				<div class="col-12 mx-a col-sm-6 col-lg-3 px-4 pb-4">
					<button class="btn btn-primary text-white px-4 display-10 display-sm-9" style="width: 198px">
						<img alt=" " src="img/twitter.png" width="24px" height="24px">
						<small class="text-dark">@jtmcommunity</small>
					</button>
				</div>

			</div>
		</div>
</div>
<!--
<hr class="m-0">
<!--<div class="container-fluid bg-white no-gutters p-0">
<div class="row no-gutters sticky-top">
	<div class="col">
		<div class="row no-gutters">
			<div class="col-lg-10 mx-a">
				<nav class="navbar navbar-light sticky-top">
				  <a class="navbar-brand" href="#">JTM</a>
				  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
				  	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
		  		</nav>
		  	</div>
		  </div>
		  <hr class="m-0">
	</div>
</div>
</div>

<!-- First DIV -------------------------------------------------------------------------------------------------------- --
<div style="
	background-image: url('img/bicycles.png');
	background-repeat: no-repeat;
	background-size: cover;
	">
	<div class="h-100" style="background: rgba(0,0,0, 0.8);">
		<div class="row no-gutters">
			<div class="col align-self-center py-2 text-center d-none d-sm-block">
				<img alt=" " src="img/boat1.png" style="height: 80%; width: 80%;border-radius: 100%;opacity: 0.8">
			</div>
			<div class="col align-self-center text-center display-6 display-xl-5 p-4 font-italic font-weight-600 text-capitalize" style="color: #E3E2DF;">
				<img class="jtm-square-40 jtm-square-md-30 d-sm-none" alt=" " src="img/boat1.png" style="border-radius: 100%;opacity: 0.8">
				<div class="d-sm-none">&nbsp;</div>
				We are one community
				<br>all in the same direction.
				<br>
				<br>Join <span class="text-facebook">JTM facebook community group</span>
				<br>to always stay updated.
				<br><br>
				<button class="btn bg-facebook text-white p-4 display-10 display-sm-9">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="24px" height="24px" viewBox="0 0 60.734 60.733" fill="white" stroke="none"
						 xml:space="preserve">
					<g>
						<path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914
							v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462
							v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z"/>
					</g>
					</svg>
					Join JTM Community Group
				</button>
			</div>
		</div>
	</div>
</div>

<!-- SECOND DIV -------------------------------------------------------------------------------------------------------- --
<div style="
	background-image: url('img/community1.png');
	background-repeat: no-repeat;
	background-size: cover;
	">
	<div class="h-100" style="background: rgb(255, 255, 255, 0.5);">
		<div class="row no-gutters">
			<div class="col align-self-center text-center display-6 display-xl-5 p-4 font-italic font-weight-600 text-capitalize" style="color: #000;">
				<img class="jtm-square-40 jtm-square-md-30 d-sm-none" alt=" " src="img/referal1.png" style="border-radius: 100%;">
				<div class="d-sm-none">&nbsp;</div>
				increase your credit limit
				<br>and get access to more free loan.
				<br>
				<br>When you <span class="text-success">Refer your friends</span>
				<br>To JTM Community
				<br><br>
				<button class="btn btn-success text-white p-4 display-10 display-sm-9">
					<svg height="24px" viewBox="0 0 512 512" width="24px" fill="white" stroke="none" xmlns="http://www.w3.org/2000/svg">
						<path d="m486.398438 512h-392.53125c-14.113282 0-25.601563-11.484375-25.601563-25.601562v-392.53125c0-14.113282 11.488281-25.601563 25.601563-25.601563h392.53125c14.117187 0 25.601562 11.488281 25.601562 25.601563v392.53125c0 14.117187-11.484375 25.601562-25.601562 25.601562zm-392.53125-426.667969c-4.703126 0-8.535157 3.824219-8.535157 8.535157v392.53125c0 4.710937 3.832031 8.535156 8.535157 8.535156h392.53125c4.710937 0 8.535156-3.824219 8.535156-8.535156v-392.53125c0-4.710938-3.824219-8.535157-8.535156-8.535157zm0 0"/><path d="m76.800781 443.734375h-51.199219c-14.117187 0-25.601562-11.488281-25.601562-25.601563v-392.53125c0-14.117187 11.484375-25.601562 25.601562-25.601562h392.53125c14.113282 0 25.601563 11.484375 25.601563 25.601562v51.199219c0 4.71875-3.824219 8.53125-8.535156 8.53125h-341.332031c-4.703126 0-8.535157 3.824219-8.535157 8.535157v341.332031c0 4.71875-3.820312 8.535156-8.53125 8.535156zm-51.199219-426.667969c-4.703124 0-8.535156 3.824219-8.535156 8.535156v392.53125c0 4.710938 3.832032 8.535157 8.535156 8.535157h42.664063v-332.800781c0-14.113282 11.488281-25.601563 25.601563-25.601563h332.800781v-42.664063c0-4.710937-3.824219-8.535156-8.535157-8.535156zm0 0"/><path d="m290.132812 324.265625c-18.824218 0-34.132812-15.308594-34.132812-34.132813 0-18.824218 15.308594-34.132812 34.132812-34.132812 18.824219 0 34.132813 15.308594 34.132813 34.132812 0 18.824219-15.316406 34.132813-34.132813 34.132813zm0-51.199219c-9.410156 0-17.066406 7.65625-17.066406 17.066406 0 9.414063 7.65625 17.066407 17.066406 17.066407 9.414063 0 17.066407-7.652344 17.066407-17.066407 0-9.410156-7.652344-17.066406-17.066407-17.066406zm0 0"/><path d="m196.265625 324.265625c-18.824219 0-34.132813-15.308594-34.132813-34.132813 0-18.824218 15.308594-34.132812 34.132813-34.132812s34.132813 15.308594 34.132813 34.132812c0 18.824219-15.316407 34.132813-34.132813 34.132813zm0-51.199219c-9.410156 0-17.066406 7.65625-17.066406 17.066406 0 9.414063 7.65625 17.066407 17.066406 17.066407 9.414063 0 17.066406-7.652344 17.066406-17.066407 0-9.410156-7.652343-17.066406-17.066406-17.066406zm0 0"/><path d="m384 324.265625c-18.824219 0-34.132812-15.308594-34.132812-34.132813 0-18.824218 15.308593-34.132812 34.132812-34.132812s34.132812 15.308594 34.132812 34.132812c0 18.824219-15.316406 34.132813-34.132812 34.132813zm0-51.199219c-9.414062 0-17.066406 7.65625-17.066406 17.066406 0 9.414063 7.652344 17.066407 17.066406 17.066407s17.066406-7.652344 17.066406-17.066407c0-9.410156-7.652344-17.066406-17.066406-17.066406zm0 0"/></svg>
					</svg>
					Learn More
				</button>
			</div>
			<div class="col align-self-center py-2 text-center d-none d-sm-block">
				<img alt=" " src="img/referal1.png" style="height: 80%; width: 80%;border-radius: 100%;">
			</div>
		</div>
	</div>
</div>-->


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jtm.js"></script>
</body>
</html>