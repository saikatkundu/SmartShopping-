
<?php

session_start();//
$username = $_SESSION['login_user'];
include('dbcon.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="ss/style1.css">
	<link rel="stylesheet" type="text/css" href="css/defaultnavigation.css">
	<link rel="stylesheet" type="text/css" href="css/">
	<link rel="stylesheet" type="text/css" href="css/scrollnav.css">	

	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script src="js/script.js"></script>
	<script src="js/navigation.js"></script>
	<script src="js/index.js"></script>
	



</head>
<body>

			<!--header / navigation of the page -->

	<header class="hdr" id="navigation">

			<!-- logo -->

		


				 <!-- links in navigation -->

		<div class="misc-of-nav"> 
			<ul>
				<li><a href="deal.php" class="deal-in-nav">Deal of the day</a></li>
				<li><a href="deal.php" class="customar-in-nav">Customar Support</a></li>
				<li><a href="help.php" class="help-in-nav">Help</a></li>
				<li><a href="#" class="offer-in-nav">Offers</a></li>
			</ul>
		</div>

		

			<div class="logo"></div>

				<!-- category manu division in navigation -->

		<div class="catagory" id="cat_manu">	
			<span class="arrow-down"></span>
			<span class="cat_title">Category Manu</span>
			<span class="arrow-up"></span>


				<!-- category manu to show -->

			<div class="items_in_manu_bar" id="i2im">	
				<span class="all-category">All Category</span>
				<span class="elect-category" id="category-type">Electronics

						<!-- electronics items -->

					<div class="abc" id="electronics-item-body">
						<div class="mobile-list">
							<h4>Mobiles</h4>
							<p>Apple</p>
							<p>Samsung</p>
							<p>Nokia</p>
							<p>htc</p>
							<p>Lenovo</p>
							<p>Motorola</p>

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
							<p>Childrens</p>
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


				<span class="men-category" id="category-type">Mens Fashion
					<div class="abc" id="men-item-body"></div>

				</span>

				<!-- end of mens fashion items/ -->

				<!-- wemens fashion items/ -->

				<span class="wemen-category" id="category-type">Wemens Fashion
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
  			
 			
 			<form action="" autocomplete="on">
 				<select class="cl1t" name="category">
 					<option>All Category</option>
							<?php
	
						$get_cats = "select * from category";
						$run_cats = mysql_query($get_cats);
						while($row_cats = mysql_fetch_array($run_cats)){
							$cat_id = $row_cats['cat_id'];
							$cat_title = $row_cats['cat_title'];
							echo "<option>$cat_title</option>";
						}
							 ?>
				</select>
 				<input type="text" class="search-text" name="search-text" placeholder="Today I am looking for" required="false">
 				<input type="submit" value="Search" class="search-button">
 			</form>
		</div>

			<!-- cart in navigation bar -->

		<div class="cart">			
			<span>Cart</span>
			<div class="cart_img"></div>
		</div>

			<!-- user account in navigation bar -->

		
			


			<?php if(!isset($_SESSION['login_user'])){ ?>
			
				<div class="user_account">
					<div class="usr_account"></div>	
					<div class="hi-user-name">
						<h4>Guest!</h4>
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
			
			<h4> Hi,&nbsp; <?php echo" $username"; ?></h4>
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


		<?php  }  ?>

	</header>

	<!-- <header class="scroll-nav"></header> -->
	<div class="scroll-nav">
		<div class="dv4lg"></div>
		<div class="dv4m" title="menu"></div>
		<div class="dv4srh">
			<!-- <div class="srh09tp">ALL CATEGORY</div> -->
			<div class="frm4sri">
				<form action="" autocomplete="off">
	 				<input type="text" class="sc-search-text" name="794521058" placeholder="Today I am looking for" title="type a text...">
	 				<input type="submit" value="Search" class="sc-search-buton">
	 			</form>
			</div>
		</div>
		<a href="#"><div class="d4cr8"></div></a>
		
		<a href="signup.php"><div class="ur1nt"><span class="acn8">Login</span></div></a>
		<a href="signup.php"><div class="ursup"><span class="acn9">Register</span></div></a>

		
	</div>

			<!-- body area or the page -->

	<div class="div1">
		<div class="slide" data-cycle-fx="fade" data-cycle-speed="500" data-cycle-timeout="5000">
				<img id="1" src="https://goo.gl/mFSdN9" width="100%" height="100%" alt="">
			<img id="2" src="http://goo.gl/6jMy71" width="100%" height="100%" alt="">
			<img id="3" src="https://goo.gl/MAeg6z" width="100%" height="100%" alt="">
			<img id="4" src="http://goo.gl/vYSGYF" width="100%" height="100%" alt="">
			<img id="5" src="https://goo.gl/c1NSg4" width="100%" height="100%" alt="">
			<img id="6" src="http://goo.gl/yATZU0" width="100%" height="100%" alt="">
			<img id="7" src="http://www.localhost/shop/images/PC_Black-phone_1._V295379758_.jpg" width="100%" height="100%" alt="">
			<img id="8" src="http://goo.gl/mPAbkI" width="100%" height="100%" alt="">
			<img id="9" src="http://goo.gl/wnl24Z" width="100%" height="100%" alt="">
			<img id="10" src="http://goo.gl/O9GSpM" width="100%" height="100%" alt="">
			<img id="11" src="http://www.localhost/shop/images/PC_Black-phone_1._V295379758_.jpg" width="100%" height="100%" alt="">
			
		</div>
		<div class="slide-pager"></div>
		<div class="prev"></div>
		<div class="next"></div>
	</div>
	<div class="recent_view">
		<span>Recently Viewed<a href="#">see more</a></span>
		<div class="recent_item1"></div>
		<div class="recent_item2"></div>
		<div class="recent_item3"></div>
		<div class="recent_item4"></div>
		<div class="recent_item5"></div>
		
		<div class="prev"></div>
		<div class="next"></div>
	</div>
	<div class="new_items">
		<span>New Items<a href="#">see more</a></span>
		<div class="new_item1" id="nitm"></div>
		<div class="new_item2" id="nitm"></div>
		<div class="new_item3" id="nitm"></div>
		<div class="new_item4" id="nitm"></div>
		<div class="new_item5" id="nitm"></div>

		<div class="prev"></div>
		<div class="next"></div>
	</div>
	<div class="electronics_items">
		<span>Electronics Items<a href="#">see more</a></span>
		<div class="elect_item1" id="e8tn"></div>
		<div class="elect_item2" id="e8tn"></div>
		<div class="elect_item3" id="e8tn"></div>
		<div class="elect_item4" id="e8tn"></div>
		<div class="elect_item5" id="e8tn"></div>

		<div class="prev"></div>
		<div class="next"></div>
	</div>
	<div class="bks-items">
		<span>Books Items<a href="#">see more</a></span>
		<div class="bks_item1" id="bk8tn"></div>
		<div class="bks_item2" id="bk8tn"></div>
		<div class="bks_item3" id="bk8tn"></div>
		<div class="bks_item4" id="bk8tn"></div>
		<div class="bks_item5" id="bk8tn"></div>

		<div class="prev"></div>
		<div class="next"></div>
	</div>


		<div class="top">
			<a href="#" data-toggle="tooltip" title="back to top">top</a>
		</div>
	
			<!-- footer of the page -->

	<footer class="ftr"></footer>			

</body>
</html>

