$(window, document, undefined).ready(function() {

	$('.catagory').mouseenter(function(){
		$('.items_in_manu_bar,.arrow-up').show();

		/*electronics in all category*/

		$('.elect-category').mouseenter(function(){
			// $('#electronics-item-body').show('slide',{direction:'left'},130);

			$('.elect-category').children().show();
		});
		
		$('.elect-category').mouseleave(function(){
			// $('#electronics-item-body').hide('slide',{direction:'left'},100);
			$('.elect-category').children().hide();
		});

		/*books and media in all category*/

		$('.books-category').mouseenter(function(){
			// $('#books-item-body').show('slide',{direction:'left'},130);
			$('.books-category').children().show();
		});
		$('.books-category').mouseleave(function () {
			// $('#books-item-body').hide('slide',{direction:'left'},100);
			$('.books-category').children().hide();
		});

		/*application in all category*/

		/*men fashion in all category*/

		/*wemen fashion in all category*/

		/*babby and kids in all category*/

		/*games and sports in all category*/

		/*health and beauty in all category*/

		/*home and kitchen in all category*/


	});

	$('.catagory').mouseleave(function(){
		$('.items_in_manu_bar,.arrow-up').hide();
	});



});



/*-------------- Items manage in Electronics page body ----------------*/

$(document).ready(function(){


	//Title.........
	//$('.it4tl').html('<p>Title</p>');

	//price...........
	//$('.it4ps').html('<p> Rs. 20,000.20</p>');

	//Description..........
	//$('.it4dsc').html('<p>here the Descriptions</p>');


	// $('.a13gdf').hover(function(){
	// 	$('.a13gdf').css({"opacity":"1","border":"1px solid #0066FF"});
	// 	$('.it4im,.it4tl,.it4ps').css({"opacity":"1","border-bottom":"1px solid #0066FF"});
	// });


	//onclick in immage
	
	
	$('.it4im').click(function(){
		// alert("hi saikat");
		
	});
});









