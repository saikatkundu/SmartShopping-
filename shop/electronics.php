<?php

include_once("function/fun.php");
session_start();//
$username = $_SESSION['login_user'];

?>



<!DOCTYPE html>
<html>
<head>
	<title>shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="ss/style1.css">
	<link rel="stylesheet" type="text/css" href="css/defaultnavigation.css">
	<link rel="stylesheet" type="text/css" href="css/electronics.css">
	<link rel="stylesheet" type="text/css" href="css/scrollnav.css">
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/navigation.js"></script>
	<script src="js/elect.js"></script>
</head>
<body>


			<!--header / navigation of the page -->

	<header class="hdr" id="navigation">

			<!-- logo -->

		<div class="logo" title="logo"></div>


				 <!-- links in navigation -->

		<div class="misc-of-nav"> 
			<ul>
				<li><a href="deal.php" class="deal-in-nav">Deal of the day</a></li>
				<li><a href="deal.php" class="customar-in-nav">Customar Support</a></li>
				<li><a href="help.php" class="help-in-nav">Help</a></li>
				<li><a href="#" class="offer-in-nav">Offers</a></li>
			</ul>
		</div>


				<!-- category manu division in navigation -->

		<div class="catagory" id="cat_manu">	
			<span class="arrow-down"></span>
			<span class="cat_title">Category Manu</span>
			<span class="arrow-up"></span>


				<!-- category manu to show -->

			<div class="items_in_manu_bar">	
				<span class="all-category">All Category</span>
				<span href="#" class="elect-category" id="category-type">Electronics

						<!-- electronics items -->

					<div class="abc" id="electronics-item-body">
						<div class="mobile-list">
							<h4>Mobiles</h4>
							<p>Apple</p>
							<p>hp</p>
							<p>Dell</p>
							<p>Sony vaio</p>
							<p>Lenovo</p>

						</div>
						
						<div class="computer-list">
							<h4>Laptops & Computers</h4>
							<p>Apple</p>
							<p>hp</p>
							<p>Dell</p>
							<p>Sony vaio</p>
							<p>Lenovo</p>

						</div>

						<div class="tab-list">
							<h4>Tablets</h4>
							<p>Apple</p>
							<p>hp</p>
							<p>Samsung</p>
							<p>Dell</p>
							<p>Lenovo</p>

						</div>

						<div class="camera-list">
							<h4>Cameras</h4>
							<p>Sony</p>
							<p>Cannon</p>
							<p>Nikon</p>
							<p>Samsung</p>
							<p>Panasonic</p>
						</div>

						<div class="mobile-accessory-list">
							<h4>Mobile Accessories</h4>
							<p>Memory Card</p>
							<p>Power Bank</p>
							<p>Covers</p>
							<p>Screen Protector</p>
							<p>Chargers</p>
						</div>

						<div class="computer-accessory-list">
							<h4>Computer Accessories</h4>
							<p>Mouse</p>
							<p>Keyboard</p>
							<p>Pendrive</p>
							<p>Hard Drive</p>
							<p>Printer</p>
							<p>Scanner</p>
						</div>

						<div class="tab-accessory-list">
							<h4>Tablet Accessories</h4>
							<p>Memory Card</p>
							<p>Power Bank</p>
							<p>Covers</p>
							<p>Screen Protector</p>
							<p>Chargers</p>
						</div>

						<div class="network-list">
							<h4>Network Components</h4>
							<p>Router</p>
							<p>Data Cards</p>
							<p>Hub</p>
							<p>Switches</p>
							<p>Bridges</p>
							<p>Gateway</p>

						</div>

						<div class="tv-list">
							<h4>Television</h4>
							<p>Sony</p>
							<p>Samsung</p>
							<p>LG</p>
							<p>Panasonic</p>
							<p>Videocon</p>
						</div>

						<div class="headphones-list">
							<h4>Headphones</h4>
							<p>Skullcandy</p>
							<p>Sennheiser</p>
							<p>Sony</p>
							<p>Bose</p>
						</div>

						<div class="ac-list">
							<h4>Air Conditionar</h4>
							<p>Voltas</p>
							<p>Whirlpool</p>
							<p>LG</p>
							<p>Panasonic</p>
							<p>Blue Star</p>
						</div>

						

						<div class="misc-list">
							<h4>Others</h4>
							<p>Room Heater</p>
							<p>Iron</p>
							<p>Washing Machine</p>
							<p>Refrigerator</p>
							<p></p>
							<p></p>
							<p></p>
						</div>

						
						
					</div>

				</span>

				<!-- end of electronics items -->

				<!-- book and media items -->

				<span class="books-category" id="category-type">Books & Media
					<div class="abc" id="books-item-body">
						<div class="books-list">
							<h4>Books</h4>
							<p>Computing & Internet</p>
							<p>Science & Technology</p>
							<p>Law</p>
							<p>Sports</p>
							<p>Literature</p>
							<p>Academic & Professional</p>
							<p>Entrance Exam.</p>
							<p>Story Books</p>
							<p>Politics</p>
							<p>Business</p>
							<p>Food & Cookings</p>
							<p>Biography</p>
							<p>Travel</p>
							<p>Children's</p>
							<p>Songs</p>
							<p>Languages</p>
							<p>Echonomics</p>
							<p>GK</p>
							<p>Images</p>
						</div>

						<div class="music-list">
							<h4>Music</h4>
							<p>Indian Music</p>
							<p>Film Songs</p>
							<p>Bengali Album</p>
							<p>Hindi Album</p>
							<p>English Album</p>
							<p>POP Songs</p>
							<p>Rock Songs</p>
							<p>Classic Songs</p>
							<p>Rap & Hip-Hop</p>
							<p>Sad Songs</p>
						</div>

						<div class="stationary-list">
							<h4>Stationary</h4>
							<p>Pen & Pencils</p>
							<p>Diary & Notebooks</p>
							<p>Calculators</p>
							<p>Boards</p>
							<p>Files</p>
							<p>Blank CD & DVD</p>
							<p>Drawing Components</p>
							<p></p>
						</div>

						<div class="movie-list">
							<h4>Movies & Videos</h4>
							<p>Hollywood</p>
							<p>Bollywood</p>
							<p>Tollywood</p>
							<p>Cartoons</p>
							<p>Animations</p>
							<p>Comedy</p>
							<p></p>
						</div>

					</div>
				</span>
				<!-- end of book and media items -->


				<!-- applications -->

				<span class="application-category" id="category-type">Applications
					<div class="abc" id="application-item-body"></div>

				</span>

				<!-- end of applications -->

				<!-- mens fashion items/ -->


				<span class="men-category" id="category-type">Men's Fashion
					<div class="abc" id="men-item-body"></div>

				</span>

				<!-- end of mens fashion items/ -->

				<!-- wemens fashion items/ -->

				<span class="wemen-category" id="category-type">Wemen's Fashion
					<div class="abc" id="women-item-body"></div>

				</span>

				<!-- end of wemens fashion items/ -->

				<!-- baby and kids items -->

				<span class="kids-category" id="category-type">Babby & Kids
					<div class="abc" id="kid-item-body"></div>

				</span>

				<!-- end of baby and kids items -->

				<!-- sports items -->

				<span class="sport-category" id="category-type">Games & Sports
					<div class="abc" id="sports-item-body"></div>

				</span>

				<!-- end of sports items -->

				<!-- health and beauty items -->

				<span class="health-category" id="category-type">Beauty & Health
					<div class="abc" id="health-item-body"></div>

				</span>

				<!-- end of health and beauty items -->

				<!-- home category items -->

				<span class="home-category" id="category-type">Home & Kitchen
					<div class="abc" id="home-item-body"></div>

				</span>

				<!-- end of home and kitchen items -->

				<!-- <span class="-category" id="category-type"><a href="#">Home & Kitchen</a></span> -->
				<span class="-category" id="category-type">Home & Kitchen
					<div class="ab"></div> 

				</span>
				<span class="-category" id="category-type">Home & Kitchen
					<div class="ab"></div>

				</span>
				<span class="-category" id="category-type">Home & Kitchen
					<div class="ab"></div>

				</span>

			</div>
		</div>


			<!-- Search bar in navigation -->
		
		<div id="search_na" class="search_nav">		
  			
 			<div class="search-cat"><span class="al0l">ALL</span><span class="s4arw"></span> </div>
 			<form action="" autocomplete="off">
 				<input type="text" class="search-text" name="search-text" placeholder="Today I am looking for">
 				<input type="submit" value="Search" class="search-button">
 			</form>
		</div>

			<!-- cart in navigation bar -->

		<a href="#"><div class="cart">			
			<span>Cart</span>
			<div class="cart_img"></div>
		</div></a>

			<!-- user account in navigation bar -->

			<?php if(!isset($_SESSION['login_user'])){ ?>
			
				<div class="user_account">
					<div class="usr_account"></div>	
					<div class="hi-user-name">
						<h4>Guste!</h4>
					</div>	
					<div class="login-manu">
						<form class="login_form" action="checklogin.php" method="POST" autocomplete="on">
							<span>Log In</span>
							<input class="login_usr" type="textfield" name="email" placeholder="emailid" required="required"><br>
							<input class="login_usr" type="password" name="password" placeholder="password" required="required">
							<div class="rememberme">
								<label><input type="checkbox" value="">Remember me</label>
								
							</div>
							
							<button type="submit" class="login_button">Login</button>
							<a href="pwdreset.php" class="pwd_rset">Reset Password</a> 
							<a href="signup.php" class="sign_up">Sign up</a>
						</form>
					</div>
				</div>	
				
			<?php }else{?>


			<div class="user_account">
			<div class="usr_account"></div>	
			<div class="hi-user-name">
			
			<h4> Hi, &nbsp; <?php echo" $username"; ?></h4>
			</div>	
			<div class="aft-login-manu">
				<ul>
					<li><a href="#">My Orders</a></li>
					<li><a href="http://localhost/shop/profile.php">Manage Account</a</li>
					<li><a href="#">Wishlist</a></li>
					<li><a href="#">Recomentation</a></li>
					<li><a href="#">Gift Card</a></li>
					<li><a href="signout.php?197-096-074-142-153-219-208">Sign Out</a></li>
				</ul>
			</div>
		</div>








			<?php       }      ?>
	</header>

	<div class="scroll-nav">
		<div class="dv4lg"></div>
		<div class="dv4m"></div>
		<div class="dv4srh">
			<!-- <div class="srh09tp"></div> -->
			<div class="frm4sri">
				<form action="" autocomplete="on">
	 				<input type="text" class="sc-search-text" name="794521058" placeholder="Today I am looking for">
	 				<input type="submit" value="Search" class="sc-search-buton">
	 			</form>
			</div>
		</div>
		<!-- cart -->
		<a href="#"><div class="d4cr8"></div></a>

		<?php if(!isset($_SESSION['login_user'])){ ?>

		<a href="signup.php"><div class="ur1nt"><span class="acn8">Login</span></div></a>
		<a href="signup.php"><div class="ursup"><span class="acn9">Register</span></div></a>

		<?php }else{?>

			<a href="signout.php?197-096-074-142-153-219-208"><div class="ursup"><span class="acn9">Sign Out</span></div></a>

		<?php       }      ?>

		
	</div>

			<!-- body area or the page -->

	
	<div class="show_items_page">
		<div class="showing_catagory_items">
			
		</div>
		<div class="filter_item_view">
			<div class="showing_result"></div>
			
			<div class="band_heading">
				<h3>BRAND</h3>
				<span class="brand-clear" >clear</span>
				
			</div>
			<div class="band_filter">
				<form role="form" name="brandform">
					
					<?php get_brand(); ?>
				</form> 
			</div>
			<div class="price_heading">
				<h3>PRICE</h3>
				<span class="price-clear">clear</span> 
			</div>
			<div class="price_filter">
				<form role="form">
					
					<div class="price-checkbox">
						<label><input type="checkbox" value="" class="price-chk">  Rs. 1001 - 2000</label>
					</div>
					<div class="price-checkbox">
						<label><input type="checkbox" value="" class="price-chk">  Rs. 2001 - 3000</label>
					</div>
					<div class="price-checkbox">
						<label><input type="checkbox" value="" class="price-chk">  Rs. 3001 - 5000</label>
					</div>
					<div class="price-checkbox">
						<label><input type="checkbox" value="" class="price-chk">  Rs. 5001 - 10000</label>
					</div>
					<div class="price-checkbox">
						<label><input type="checkbox" value="" class="price-chk">  Rs. 10001 - 20000</label>
					</div>
					<div class="price-checkbox">
						<label><input type="checkbox" value="" class="price-chk">  Rs. 20001 - 30000</label>
					</div>
					<div class="price-checkbox">
						<label><input type="checkbox" value="" class="price-chk">  Rs. Above 30000</label>
					</div>
				</form> 
			</div>
			<div class="avalablity_heading">
				<h3>AVAILABILITY</h3>
				<span class="avl-clear">clear</span> 
			</div>
			<div class="avalablity_filter">
				<form role="form">
					<div class="available-checkbox">
						<label><input type="checkbox" class="avl-chk" value="">Including out of stock</label>
					</div>
					<div class="available-checkbox">
						<label><input type="checkbox" class="avl-chk" value="">Excluding out of stock</label>
					</div>
				</form> 
			</div>
			<div class="os_heading">
				<h3>OPERATING SYSTEM</h3>
				<span class="os-clear">clear</span> 
			</div>
			<div class="os_filter">
				<form role="form">
				<div class="os-checkbox">
						<label><input type="checkbox" class="os-chk" value="">iOs</label>
					</div>
					<div class="os-checkbox">
						<label><input type="checkbox" class="os-chk" value="">Android</label>
					</div>
					<div class="os-checkbox">
						<label><input type="checkbox" class="os-chk" value="">Windows</label>
					</div>
					<div class="os-checkbox">
						<label><input type="checkbox" class="os-chk" value="">Bada</label>
					</div>
					
				</form> 
			</div>
			
			<div class="fe4s_heading">
				<h3>FEATURES</h3>
				<span class="fe4s-clear">clear</span> 
			</div>
			<div class="fe4s_filter">
				<form role="form">
				<div class="fe4s-checkbox">
						<label><input type="checkbox" class="fe4s-chk" value="">Dual SIM</label>
					</div>
					<div class="fe4s-checkbox">
						<label><input type="checkbox" class="fe4s-chk" value="">Music Player</label>
					</div>
					<div class="fe4s-checkbox">
						<label><input type="checkbox" class="fe4s-chk" value="">Touchscreen</label>
					</div>
					<div class="fe4s-checkbox">
						<label><input type="checkbox" class="fe4s-chk" value="">E-Mail</label>
					</div>
					<div class="fe4s-checkbox">
						<label><input type="checkbox" class="fe4s-chk" value="">FM Player</label>
					</div>
					<div class="fe4s-checkbox">
						<label><input type="checkbox" class="fe4s-chk" value="">Bluetooth</label>
					</div>
					<div class="fe4s-checkbox">
						<label><input type="checkbox" class="fe4s-chk" value="">GPS</label>
					</div>
					
				</form> 
			</div>

			<div class="int-fe4s_heading">
				<h3>INTERNET FEATURES</h3>
				<span class="int-fe4s-clear">clear</span> 
			</div>
			<div class="int-fe4s_filter">
				<form role="form">
				<div class="int-fe4s-checkbox">
						<label><input type="checkbox" class="int-fe4s-chk" value="">3G</label>
					</div>
					<div class="int-fe4s-checkbox">
						<label><input type="checkbox" class="int-fe4s-chk" value="">4G</label>
					</div>
					<div class="int-fe4s-checkbox">
						<label><input type="checkbox" class="int-fe4s-chk" value="">GPRS</label>
					</div>
					<div class="int-fe4s-checkbox">
						<label><input type="checkbox" class="int-fe4s-chk" value="">EDGE</label>
					</div>
					<div class="int-fe4s-checkbox">
						<label><input type="checkbox" class="int-fe4s-chk" value="">WAP</label>
					</div>
					<div class="int-fe4s-checkbox">
						<label><input type="checkbox" class="int-fe4s-chk" value="">Wi-fi</label>
					</div>
					
					
				</form> 
			</div>

			<div class="pcam_heading">
				<h3>PRIMARY CAMERA</h3>
				<span class="pcam-clear">clear</span> 
			</div>
			<div class="pcam_filter">
				<form role="form">
				<div class="pcam-checkbox">
						<label><input type="checkbox" class="pcam-chk" value="">Below 2 MP</label>
					</div>
					<div class="pcam-checkbox">
						<label><input type="checkbox" class="pcam-chk" value="">2 - 2.9 MP</label>
					</div>
					<div class="pcam-checkbox">
						<label><input type="checkbox" class="pcam-chk" value="">3 - 4.9 MP</label>
					</div>
					<div class="pcam-checkbox">
						<label><input type="checkbox" class="pcam-chk" value="">5 - 8 MP</label>
					</div>
					<div class="pcam-checkbox">
						<label><input type="checkbox" class="pcam-chk" value="">Above 8 MP</label>
					</div>
		
				</form> 
			</div>

			<div class="scam_heading">
				<h3>SECONDARY CAMERA</h3>
				<span class="scam-clear">clear</span> 
			</div>
			<div class="scam_filter">
				<form role="form">
				<div class="scam-checkbox">
						<label><input type="checkbox" class="scam-chk" value="">Below 2 MP</label>
					</div>
					<div class="scam-checkbox">
						<label><input type="checkbox" class="scam-chk" value="">2 - 2.9 MP</label>
					</div>
					<div class="scam-checkbox">
						<label><input type="checkbox" class="scam-chk" value="">3 - 4.9 MP</label>
					</div>
					<div class="scam-checkbox">
						<label><input type="checkbox" class="scam-chk" value="">5 - 7 MP</label>
					</div>
					<div class="scam-checkbox">
						<label><input type="checkbox" class="scam-chk" value="">Above 7 MP</label>
					</div>
										
				</form> 
			</div>

		</div>
		<div class="sort_item_byorder">
			<ul>
				<li><a href='electronics.php?164-153-164-219-0116-186'>Popularity</a></li>
				<li><a href='electronics.php?142-052-2311'>New Arrival</a></li>				
				<li><a href='electronics.php?085-096-074-085'>High Price</a></li>
				<li><a href='electronics.php?129-153-2311'>Low Price</a></li>
				<li>Offers</li>
			</ul>
		</div>
		<div class="sh0i4t">
			<?php 
				if (isset($_GET['085-096-074-085'])) {
				    high_price();
				}else if (isset($_GET['129-153-2311'])){
					low_price();
				}else if (isset($_GET['142-052-2311'])){
					new_item();
				}else{
					get_item(); 
				}
			?>
		</div>

		
		<div class="top">
			<a href="#" data-toggle="tooltip" title="back to top">top</a>
		</div>
		
		
	</div>
	<div class="pgn0"></div>
			<!-- footer of the page -->

	<footer class="ftr"></footer>			

</body>
</html>