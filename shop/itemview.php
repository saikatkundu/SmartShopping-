<!DOCTYPE html>
<html>
<head>
	<title>shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="stylesheet" type="text/css" href="css/itemview.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
</head>
<body>
	<header class="hdr">
		<div class="catagory">
			<span>Catagory Manu</span>
			<div></div>
		</div>
		<a href="deal.php" class="deal">Deal of the day</a>
		<div id="search_nav">
  			<form action="" autocomplete="on">
  				<input id="search" name="search" type="text" placeholder="Today I am looking for ?">
  				<input id="search_submit" value="Rechercher" type="submit">
 			</form>
		</div>
		<div class="usr_account">
			<div class="login_content">
				<form class="login_form">
					<input class="login_usr" type="email" name="email" placeholder="emailid" required ><br>
					<input class="login_usr" type="password" name="password" placeholder="password" required >
					<input type="checkbox" value="remember-me" class="rememberMe" name="rememberMe"> <span id="r">Remember me</span>
					<button type="button" class="login_button">Login</button>
					<a href="pwdreset.php" class="pwd_rset">Password Reset</a> 
					<a href="signup.php" class="sign_up">Sign up</a>
				</form>
				
			</div>
		</div>
	</header>
	
	<div class="show_items_page">
		<div class="showing_catagory_items">
			
		</div>
		<div class="filter_item_view">
			<div class="showing_result"></div>
			<div class="band_heading">
				<h3>BAND</h3>
				<span>clear</span> 
			</div>
			<div class="band_filter"></div>
			<div class="price_heading">
				<h3>PRICE</h3>
				<span>clear</span> 
			</div>
			<div class="price_filter"></div>
			<div class="price_heading">
				<h3>AVAILABLE</h3>
				<span>clear</span> 
			</div>
			<div class="avalablity_filter"></div>
			
		</div>
		<div class="sort_item_byorder">
			<ul>
				<li>New Arrival</li>
				<li>Popularity</li>
				<li>High Price</li>
				<li>Low Price</li>
			</ul>
		</div>
		<div class="showitems_row1">
			<div class="showitems_row1_colum1" id="colum_row1">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row1_colum2" id="colum_row1">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row1_colum3" id="colum_row1">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row1_colum4" id="colum_row1">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			
		</div>
		<div class="showitems_row2">
			<div class="showitems_row2_colum1" id="colum_row2">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row2_colum2" id="colum_row2">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row2_colum3" id="colum_row2">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row2_colum4" id="colum_row2">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
		</div>
		<div class="showitems_row3">
			<div class="showitems_row3_colum1" id="colum_row3">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row3_colum2" id="colum_row3">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row3_colum3" id="colum_row3">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row3_colum4" id="colum_row3">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
		</div>
		<div class="showitems_row4">
			<div class="showitems_row4_colum1" id="colum_row4">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row4_colum2" id="colum_row4">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row4_colum3" id="colum_row4">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row4_colum4" id="colum_row4">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
		</div>
		<div class="showitems_row5">
			<div class="showitems_row5_colum1" id="colum_row5">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row5_colum2" id="colum_row5">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row5_colum3" id="colum_row5">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
			<div class="showitems_row5_colum4" id="colum_row5">
				<div class="item_image" id="item_image"></div>
				<div class="item_name"></div>
				<div class="item_price"></div>
			</div>
		</div>
		<div class="top"></div>
		<a href="#" data-toggle="tooltip" title="back to top">top</a>
		
	</div>

	<footer class="ftr"></footer>

</body>
</html>