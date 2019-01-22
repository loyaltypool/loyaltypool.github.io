<?php
session_start();
if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
	header("location: login.html");
	exit;
}
/*
if (!(isset($_SESSION['profile-updated']) && $_SESSION['profile-updated'] == true)){
	header("location: profile.html");
	exit;
}*/

include_once("script/jtm.php");
$main = new Main();
$main->GetUserId();
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
		  <button class="btn btn-link navbar-toggler" style="border: 0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
		  	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		   <div class="collapse navbar-collapse" id="navbarSupportedContent">
		   	<hr>
		    <ul class="navbar-nav pl-4 mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link text-primary" href="script/logout.php">Logout</a>
		      </li>
		    </ul>
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
	<div class="col-sm text-left jtm-dashboard-center">
		<div class="row">
		  <div class="col-3 d-none d-sm-block">
		    <div class="nav flex-column nav-pills sticky-top p-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		      <a class="text-info jtm-nav-link nav-link active" id="v-home-tab" data-toggle="pill" href="#dashboard-tab" role="tab" 
		      	aria-controls="v-home" aria-selected="true">Dashboard</a>
		      <a class="text-info jtm-nav-link nav-link" id="v-referal-tab" data-toggle="pill" href="#referal-tab" role="tab" 
		      	aria-controls="v-referal" aria-selected="false">Referal</a>
		      <a class="text-info jtm-nav-link nav-link" id="v-profile-tab" data-toggle="pill" href="#profile-tab" role="tab"
		      	aria-controls="v-profile" aria-selected="false">Profile</a>
		    </div>
		  </div>
		  <div class="col-sm-9 p-0 p-sm-4">
			  	<ul class="nav nav-tabs mb-4 pt-4 nav-fill sticky-top bg-white d-sm-none" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="text-info jtm-nav-link-first nav-link active" id="h-home-tab" data-toggle="tab" href="#dashboard-tab" role="tab"
				    	aria-controls="dashboard" aria-selected="true">
				    	Dashboard
				    </a>
				  </li>
				  <li class="nav-item">
				    <a class="text-info nav-link text-info" id="h-referal-tab" data-toggle="tab" href="#referal-tab" role="tab" 
				    	aria-controls="referal" aria-selected="false">
				    	Referral
				    </a>
				  </li>
				  <li class=" nav-item">
				    <a class="text-info jtm-nav-link-last nav-link" id="h-profile-tab" data-toggle="tab" href="#profile-tab" role="tab" 
				    	aria-controls="profile" aria-selected="false">
				    	Profile
				    </a>
				  </li>
				</ul>

			    <div class="tab-content mx-1" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<div class="jumbotron jumbotron-fluid">
						  	<div class="container">
							    <h4 class="display-5 font-normal">Dashboard</h4>
							    <hr class="my-2">
							    <div class="row no-gutters pb-2">
					      			<div class="col text-left">
					      				<small class="text-muted">
					      					community id:
					      					<a href="javascript:void()" class="font-normal text-primary text-underline" style="text-transform: lowercase">
					      						<?php echo $main->userId;?>
					      					</a>
					      				</small>
					      			</div>
					      			<div class="col text-right">
					      				<small class="text-muted">
					      					loan limit: <span class="font-italic"><span class="text-through">N</span>6000</span>
					      				</small>
					      			</div>
				      			</div>

				      			<h4 class="text-right display-7 font-italic text-success mt-4 pr-1">
				      				<span class="text-through">N</span>6,000
				      			</h4>
				      			<div class="progress" style="background-color: rgba(0, 0, 0, 0.1)">
								  <div class="progress-bar w-0 display-small font-italic text-right" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="color: rgba(255, 255, 255, 0.5)">
								  	<span class="px-2"></span>
								  </div>
								</div>
								<div class="text-left" style="margin-top: 48px;">
									<button class="btn btn-md btn-success btn-block py-2">withdraw credit</button>
								</div>
							</div>
						</div>

						<div class="mt-4">
						<h2 class="text-left p-2 pl-3 bg-light jtm-h2-info" style="margin-bottom: 1rem;">
							<svg class="text-info svg-h2" id="i-user" viewBox="0 0 32 32" width="30" height="30" fill="none"
								stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
						    	<path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
							</svg>
							Accounts
						</h2>
						<div class="row no-gutters">
							<div class="col p-1">
							    <div class="jtm-card bg-facebook d-table mx-a text-center text-light">
							      <h4 class="card-title">
							      	facebook
							      </h4>
							      <div class="card-text">
							      	<small class="font-italic">
							      		community credit<br>
								      	<span class="font-normal">
											<span class="text-through">N</span>1000
										</span>
									</small>
								  </div>
							      <div class="card-text mt-3">
							      	<a href="facebook.php" class="btn btn-sm btn-block bg-light jtm-card-btn text-facebook">
							      		+connect
							      	</a>
							      </div>
							    </div>
							</div>

							<div class="col p-1">
							    <div class="jtm-card bg-twitter d-table mx-a text-center text-light">
							      <h4 class="card-title">
							      	twitter
							      </h4>
							      <div class="card-text">
							      	<small class="font-italic">
							      		community credit<br>
								      	<span class="font-normal">
											<span class="text-through">N</span>1000
										</span>
									</small>
								  </div>
							      <div class="card-text mt-3">
							      	<a href="twitter.php" class="btn btn-sm btn-block bg-light jtm-card-btn text-facebook">
							      		+connect
							      	</a>
							      </div>
							    </div>
							</div>

							<div class="col p-1">
							    <div class="jtm-card bg-instagram d-table mx-a text-center text-light">
							      <h4 class="card-title">
							      	instagram
							      </h4>
							      <div class="card-text">
							      	<small class="font-italic">
							      		community credit<br>
								      	<span class="font-normal">
											<span class="text-through">N</span>1000
										</span>
									</small>
								  </div>
							      <div class="card-text mt-3">
							      	<button class="btn btn-sm btn-block bg-light jtm-card-btn text-instagram">
							      		+connect
							      	</button>
							      </div>
							    </div>
							</div>

							<div class="col p-1">
							    <div class="jtm-card bg-youtube d-table mx-a text-center text-light">
							      <h4 class="card-title">
							      	youtube
							      </h4>
							      <div class="card-text">
							      	<small class="font-italic">
							      		community credit<br>
								      	<span class="font-normal">
											<span class="text-through">N</span>1000
										</span>
									</small>
								  </div>
							      <div class="card-text mt-3">
							      	<a href="youtube.php" class="btn btn-sm btn-block bg-light jtm-card-btn text-facebook">
							      		+connect
							      	</a>
							      </div>
							    </div>
							</div>

							<div class="col p-1">
							    <div class="jtm-card jtm-card-whatsapp d-table mx-a text-center text-light">
							      <h4 class="card-title">
							      	whatsapp
							      </h4>
							      <div class="card-text">
							      	<small class="font-italic">
							      		community credit<br>
								      	<span class="font-normal">
											<span class="text-through">N</span>1000
										</span>
									</small>
								  </div>
							      <div class="card-text mt-3">
							      	<a href="whatsapp.php" class="btn btn-sm btn-block bg-light jtm-card-btn text-facebook">
							      		+connect
							      	</a>
							      </div>
							    </div>
							</div>								
						</div>

						</div>

				      	</div>
				      	<div class="tab-pane fade" id="referal-tab" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				      		<div class="jumbotron jumbotron-fluid">
							  	<div class="container">
								    <h4 class="display-5 font-normal">Referal</h4>
								    <hr class="my-2">

								    <table class="mx-1" style="border: 1px solid rgba(0, 0, 0, .05)">
								    	<tr class="bg-secondary text-light" style="border-bottom: 1px solid rgba(0, 0, 0, .05)">
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .05)">
								    			<small class="">
					      							total referal credit
					      						</small>
								    		</td>
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .0)">
								    			<small class="">
					      							<span class="font-italic"><span class="text-through">N</span>100,000</span>
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="">
					      							<span class="font-italic">1000</span>
					      						</small>
								    		</td>
								    	</tr>
								    	<tr style="border-bottom: 1px solid rgba(0, 0, 0, .05)">
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .05)">
								    			<small class="text-facebook">
					      							facebook credit
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-facebook">
					      							<span class="font-italic"><span class="text-through">N</span>10,000</span>
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-facebook">
					      							<span class="font-italic">1000</span>
					      						</small>
								    		</td>
								    	</tr>
								    	<tr style="border-bottom: 1px solid rgba(0, 0, 0, .05)">
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .05)">
								    			<small class="text-twitter">
					      							twitter credit
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-twitter">
					      							<span class="font-italic"><span class="text-through">N</span>10,000</span>
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-twitter">
					      							<span class="font-italic">1000</span>
					      						</small>
								    		</td>
								    	</tr>
								    	<tr style="border-bottom: 1px solid rgba(0, 0, 0, .05)">
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .05)">
								    			<small class="text-instagram">
					      							instagram credit
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-instagram">
					      							<span class="font-italic"><span class="text-through">N</span>10,000</span>
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-instagram">
					      							<span class="font-italic">1000</span>
					      						</small>
								    		</td>
								    	</tr>
								    	<tr style="border-bottom: 1px solid rgba(0, 0, 0, .05)">
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .05)">
								    			<small class="text-youtube">
					      							youtube credit
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-youtube">
					      							<span class="font-italic"><span class="text-through">N</span>10,000</span>
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-youtube">
					      							<span class="font-italic">1000</span>
					      						</small>
								    		</td>
								    	</tr>
								    	<tr style="border-bottom: 1px solid rgba(0, 0, 0, .05)">
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .05)">
								    			<small class="text-whatsapp">
					      							whatsapp credit
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-whatsapp">
					      							<span class="font-italic"><span class="text-through">N</span>10,000</span>
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-whatsapp">
					      							<span class="font-italic">1000</span>
					      						</small>
								    		</td>
								    	</tr>
								    	<tr style="border-bottom: 1px solid rgba(0, 0, 0, .05)">
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .05)">
								    			<small class="text-muted">
					      							extra credit
					      						</small>
								    		</td>
								    		<td class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .0)">
								    			<small class="text-muted">
					      							<span class="font-italic"><span class="text-through">N</span>50,000</span>
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-muted">
					      							<span class="font-italic">1000</span>
					      						</small>
								    		</td>
								    	</tr>
								    	<tr style="border-bottom: 1px solid rgba(0, 0, 0, .05)">
								    		<td colspan="2" class="px-3 py-1" style="border-right: 1px solid rgba(0, 0, 0, .05)">
								    			<small class="text-secondary">
					      							total referals
					      						</small>
								    		</td>
								    		<td class="px-3 py-1">
								    			<small class="text-muted">
					      							<span class="font-italic">1000</span>
					      						</small>
								    		</td>
								    	</tr>
								    </table>
								</div>
							</div>

							<h4 class=" font-normal text-info">Referral Code</h4>
							<div class="input-group mb-4 pb-4">
							 	<input disabled type="text" class="form-control pl-4 text-info" value="<?php echo $main->userId;?>" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-right-radius: 0; border-bottom-right-radius: 0">
								<div class="input-group-append">
									<button class="btn btn-info" type="button" 
										style="border-top-left-radius: 0; border-bottom-left-radius: 0">
										copy
									</button>
								</div>
							</div>

							<h4 class="display-5 font-normal">Referral Link</h4>
							<div class="input-group mb-4 pb-4">
							 	<input disabled type="text" class="form-control pl-4" value="https://jtm.com?ref=<?php echo $main->userId;?>" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-right-radius: 0; border-bottom-right-radius: 0">
								<div class="input-group-append">
									<button class="btn btn-secondary" type="button" 
										style="border-top-left-radius: 0; border-bottom-left-radius: 0">
										copy
									</button>
								</div>
							</div>

							<!--<h2 class="text-left p-2 pl-3 bg-light jtm-h2-info mt-4" style="margin-bottom: 1rem;">
								<svg class="text-info svg-h2" id="i-user" viewBox="0 0 32 32" width="30" height="30" fill="none"
									stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
							    	<path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
								</svg>
								Banners
							</h2>-->
				      	</div>

				      	<div class="tab-pane fade" id="profile-tab" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				     		<h2 class="text-left p-2 pl-3 bg-light jtm-h2" style="margin-bottom: 1rem;">
								<svg class="text-info svg-h2" id="i-user" viewBox="0 0 32 32" width="30" height="30" fill="currentcolor"
									stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
							    	<path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
								</svg>
								Profile
							</h2>
							<div class="text-muted text-center font-italic">
								Update profile to complete registration,
								use name as is on bank account to avoid any withdrawal issues
							</div>
							<form class="text-left mt-4 mx-2" disabled id="profile-form" onsubmit="return false">
								<div class="alert alert-danger text-left d-none" id="alert-box" role="alert">
									Error updating profile, please try again!
								</div>
								<div class="form-group">
								<label for="exampleInputEmail1">Surname</label>
								<input type="text" class="form-control" id="surname" required placeholder="Surname" 
									value="<?php echo $main->surname; ?>">
								</div>
								<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" class="form-control" id="first-name" required placeholder="First Name"
									value="<?php echo $main->name; ?>">
								</div>
								<div class="form-group">
								<label for="exampleInputEmail1">Other names (Optional)</label>
								<input type="text" id="other-names" class="form-control" placeholder="Other names"
									value="<?php echo $main->otherNames; ?>">
								</div>
								<div class="form-group">
							    <label for="exampleInputEmail1">Email</label>
							    <input type="email" class="form-control" readonly value="<?php echo $main->email; ?>">
								</div>
								<div class="form-group">
							    <label for="exampleFormControlSelect1">Country</label>
							    <select id="country" class="form-control">
							      <option value="Nigeria" selected>Nigeria</option>
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
								<input type="tel" id="phone" class="form-control" required value="<?php echo $main->phone; ?>">
								</div>
								<button type="submit" disabled class="btn btn-primary">Update profile</button>
								<img src="img/loader1.gif" id="submit-loader" class="d-none" alt="o" width="20" height="20">
								<a id="submit-text" href="javascript:void(0)" style="visibility: hidden" class="ml-1" >edit</a>
							</form>
				      </div>
				    </div>
		  </div>
		</div>

		<!--
		<div class="tab-content" id="pills-tabContent">
		  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">A</div>
		  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">B</div>
		  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">C</div>
		</div>

		<nav class="nav nav-pills nav-fill">
		  <a class="nav-item nav-link active" href="#">Dashboard</a>
		  <a class="nav-item nav-link" href="#">Referrals</a>
		  <a class="nav-item nav-link" href="#">Profile</a>
		</nav>

		<div>Eligible Earning: N1500</div>
		<div></div>

		<div>
		<h2 class="text-left p-2 pl-3 bg-light jtm-h2" style="margin-bottom: 1rem;">
			<svg class="text-info svg-h2" id="i-user" viewBox="0 0 32 32" width="30" height="30" fill="currentcolor" stroke="none" 
				stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
		    	<path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
			</svg>
			Accounts
		</h2>
		<div>
			facebook
			<br>twitter
			<br>instagram
			<br>youtube
			<br>whatsapp
		</div>
		</div>
	</div>
</div>
</div>-->

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
</body>
</html>