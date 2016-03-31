<?php
//include('checklogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: http://localhost/shop/index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=100" > -->
	<title>shop Login or Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="ss/style1.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script src="js/index.js"></script>


	
</head>
<body>
	
	<header style="position: fixed; height: 50px; width: 100%; background-color: #003366; z-index: 1; 
	-moz-box-shadow:    1px 1px 1.3px 1px #606060;
	-webkit-box-shadow: 1px 1px 1.3px 1px #606060;
  	box-shadow: 1px 1px 1.3px 1px #606060;
	">
		<div class="logo-nav-loginpage" style="position: relative;height: 40px;width: 150px;border: 1px solid #FFF; top: 5px; left: 45%;cursor: pointer;background: #C0C0C0;">
		</div>
	</header>
	<div class="signin_body">
		
		<div class="form_body">

			<div class="heading">
				<span class="spn_h" >Home</span>
				<span class="spn_l" >Sign in</span>
				<span class="spn_r" >Sign up</span>
				
			</div>
			<div class="login_form" id="login_form">
				<form  action="checklogin.php" method="POST">
					<div class="group">
						<input type="textfield" id="input" name="email"><span class="highlight"></span><span class="bar"></span>
						<label>Email</label>
					</div>
					<div class="group">
						<input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
						<label>Password</label>
					</div>
					
					<div class="rm24m">
						<label><input type="checkbox" value="">Remember me</label>
						
					</div>
							
						
				
					


					<button type="submit" class="button buttonBlue">Log in
					<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
					</button>
					<a class="forget" href="forgetpwd.php">Forget password ?</a>
					<span class="er0r"><?php $reasons = array("password" => "Wrong Username or Password", "blank" => "You have left one or more fields blank."); if ($_GET["loginFailed"]) echo $reasons[$_GET["reason"]]; ?></span>
				</form>
			</div>
			
			<div class="signup_form" id="signup_form">
				<form action="checksignup.php" method="POST">
					<div class="group">
						<input type="textfield" name="username"><span class="highlight"></span><span class="bar"></span>
						<label>Name</label>
					</div>
					<div class="group">
						<input type="email" name="email"><span class="highlight"></span><span class="bar"></span>
						<label>Email</label>
					</div>
					
					<div class="group">
						<input type="password" name="password1"><span class="highlight"></span><span class="bar"></span>
						<label>Password</label>
					</div>
					<div class="group">
						<input type="password" name="password2"><span class="highlight"></span><span class="bar"></span>
						<label>Confirm Password</label>
					</div>
					<div class="group">
						<input type="textfield" name="phone"><span class="highlight"></span><span class="bar"></span>
						<label>Phone Number</label>
					</div>
					<div class="group">
						<input type="textfield" name="address"><span class="highlight"></span><span class="bar"></span>
						<label>Address</label>
					</div>
					<button type="submit" class="button buttonBlue">Create Account
					<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
					</button>
				</form>
			</div>
			
			
		</div>
		
	</div>

	<footer class="ftr" style="position: relative; height: 40px; width: 100%; text-align: center; bottom: 0;margin: 0;padding: 0;margin-bottom: 2px;">
		<h4 style="color: #fff;padding-top: 10px;">&copy; by Mr. Saikat Kundu @ 2016</h4>
	</footer>

</body>
</html>