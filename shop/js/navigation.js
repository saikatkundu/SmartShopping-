
$(window, document, undefined).ready(function() {


	//logo in navigation bar

	$('.logo').click(function(){
		window.location = 'http://localhost/shop/index.php';
	});

	/*----------login form in navigation bar.......*/

	// $('.user_account').click(function(){
	// 	window.location = 'http://localhost/shop/signup.php';
	// });
	// $('.login-manu').click(function(e){
	// 	e.stopPropagation();
	// });

	$('.sign_up').click(function(){
		window.location = 'http://localhost/shop/signup.php';
		$('.signup_form').show();
		$('.login_form').hide();
	});
	$('.sign_up').click(function(){
		if($(this).attr("class") == "sign_up"){
			$('.login_form').hide();
    		$('.signup_form').show();
    		$('.login_content').hide();
			
		}

	});

	/*-------login form visibility in navigation bar----*/
	
	$('.user_account').mouseleave(function(){
		$('.login-manu').slideUp();
	});

	$('.user_account').mouseenter(function(){
		// alert("hi");
		$('.login-manu').slideDown();
	});


	/*----- After Login in nav a/c -----------*/

	$('.user_account').mouseleave(function(){
		$('.aft-login-manu').slideUp();
	});

	$('.user_account').mouseenter(function(){
		// alert("hi");
		$('.aft-login-manu').slideDown();
	});

	




	/*catagory manu items forwording*/

	$('.mobile-list').click(function(){
		window.location = 'http://localhost/shop/electronics.php';
	});

	/*---------------Back to top button--------------*/
	$('.top').mouseenter(function(){
		$('.top a').css({"color":"#FFF"});
	});


});

/*---------- manage slide of navigation on mouse scroll-------*/

$(document).ready(function() {

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scroll-nav').css({"top":"0px"});
			//$('.logo').css({"bottom":"10px","height":"40px","width":"120px"});
			$('.scroll-nav').slideDown();
			$('.top').fadeIn();
		}else if($(this).scrollTop() < 40){
			$('.scroll-nav').slideUp(600);
			// $('.scroll-nav').show();
			$('.top').fadeOut();
		}
	});

	
	//Click event to scroll to top
	$('.top').click(function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop : 0},800);
		
	});

	// $(function(){
	// 	$(window).load(function(){ // On load
	// 		$('.dv4srh').css({'width':(($(window).width()))+'px'});
	// 	});
	// 	$(window).resize(function(){ // On resize
	// 		$('.dv4srh').css({'width':(($(window).width()))+'px'});
	// 	});
	// });


});



/*-----------------------------Scroll Navigation--------------------*/

$(document).ready(function(){

	/*---------- logo manage -----------*/

	$('.dv4lg').click(function(){
		window.location = 'http://localhost/shop/index.php';
	});

	/*------------ Menu ----------------*/

	$('.dv4m').html('<div class="n46l"></div>');
	$('.dv4m').mouseenter(function(){
		$('.n46l').show();
		$('.n46l').css({"height":"100px","width":"200px",
			"background-color":"#000","margin-top":"40px",
			"z-index":"10"});
	});
	$('.dv4m').mouseleave(function(){
		$('.n46l').hide();
	});
});


