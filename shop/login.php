

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=100" >
	<title>shop Login or Register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script src="js/index.js"></script>


	
</head>
<body>
	
	<header style="position: fixed; height: 50px; width: 100%; background-color: #006699; z-index: 1; 
	-moz-box-shadow:    1px 1px 1.3px 1px #606060;
	-webkit-box-shadow: 1px 1px 1.3px 1px #606060;
  	box-shadow: 1px 1px 1.3px 1px #606060;
	">
		<div class="logo-nav-loginpage" style="position: relative;height: 40px;width: 150px;border: 1px solid #FFF; top: 5px; left: 45%;cursor: pointer;background: #C0C0C0;">
		</div>
		
			
	</header>
	
	<div class="logn_bd">
		<form class="login_form" method="POST" action="http://localhost/shop/checklogin.php">
			<label>Email:</label>
			<input id="username" class="username" placeholder="Email" type="text" name="username">
			<label>Password: </label>
			<input id="pass" class="password" name="password" type="password" placeholder="**********">
			<span><?php echo $error; ?></span>

			<in
		</form>

		
	</div>
	<div style="position: relative;height: 30px;width: 100%;background-color: #006699;margin-bottom: 2px;padding: 0;"></div>

</body>
</html>