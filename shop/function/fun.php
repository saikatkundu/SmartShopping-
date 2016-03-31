

<?php


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="saikat"; // Mysql password 
$db_name="shop"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$dbselect = mysql_select_db("$db_name",$con)or die("cannot select DB");


// limit();



/*---------------  index page slide show ----------------*/

function show_slide(){

	$get_slide = "select * from slide";
	$run_slide = mysql_query($get_slide);

	while($my_slide = mysql_fetch_array($run_slide)) {
		$slide_id = $my_slide['slide_id'];
		$slide_img = $my_slide['home_slide'];

		//echo "hi: $slide_id";
		echo "<img id=$slide_id  src=$slide_img width=100% height=100% >";
	}
}

//INSERT INTO slide(slide_id,home_slide) VALUES (NULL,'');




/*----------   getting  brand from database --------*/

function get_brand(){
	global $con;

	$get_brand = "select * from brands";
	$run_brand = mysql_query($get_brand);

	

	while($row_brand = mysql_fetch_array($run_brand)){

		
		$brand_id = $row_brand['brand_id'];
		$brand_title = $row_brand['brand_name'];

		
		echo '<div class="brand-checkbox">
						<label><input type="checkbox"class="brnd-chk" value="">';echo "$brand_title"; echo'</label>
					</div>';
	}
}

/*-------------- getting category from database -------*/

function get_cat(){
	global $con;

	
	$get_cats = "select * from category";

	$run_cats = mysql_query($get_cats);
	

	//$row_cats = mysql_fetch_array($run_cats);

	while($row_cats = mysql_fetch_array($run_cats)){

		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];

		//echo "<p>$cat_title</p>";
		echo'<span href="#" class="elect-category" id="category-type">'; echo "$cat_title";echo'</span>';

	}
	

}

/*------------- getting items from database -----------*/

function get_item(){
	global $con;

	
	$get_items = "select * from items";

	$run_items = mysql_query($get_items);
	
	show_item($run_items);

	//$row_items = mysql_fetch_array($run_items);

	// while($row_items = mysql_fetch_array($run_items)){

	// 	$item_id = $row_items['item_id'];
	// 	$item_image = $row_items['item_image'];
	// 	$item_title = $row_items['item_title'];
	// 	$item_price = $row_items['item_pice'];
	// 	$item_desc1 = $row_items['item_desc1'];
	// 	$item_desc2 = $row_items['item_desc2'];
	// 	$item_desc3 = $row_items['item_desc3'];
	// 	$item_desc4 = $row_items['item_desc4'];

	// 	echo '

	// 	<div class="a13gdf">
	// 		<div class="it4im">';echo" <img src=$item_image width=90% height=97%> "; echo'</div>
	// 		<div class="it4tl"><a href="product_details.php">';echo" $item_title ";echo'</a></div>
	// 		<div class="it4ps"><b>Rs. '; echo" $item_price ";echo'</b></div>
	// 		<div class="it4dsc"> <li>';
	// 		echo" $item_desc1 "; echo' </li><li>'; echo "$item_desc2";echo'</li><li>';echo "$item_desc3"; echo'</li><li>'; echo "$item_desc4";echo'</li>
	// 		</div>
	// 	</div>

	// 	';

	// }
	

}

/*---------------Sort items By High Price --------------*/

function high_price(){

	global $con;	
	$get_hprice = "SELECT * FROM items ORDER BY item_pice DESC";
	$run_hprice = mysql_query($get_hprice);	
	show_item($run_hprice);

}


/*---------------Sort items By Low Price --------------*/

function low_price(){
	global $con;	
	$get_lprice = "SELECT * FROM items ORDER BY item_pice ASC";
	$run_lprice = mysql_query($get_lprice);	
	show_item($run_lprice);

}


/*--------------------- sort items by new product -------------------------*/



function new_item(){
	global $con;
	$get_new = "SELECT * FROM items ORDER BY item_id DESC";
	$run_new = mysql_query($get_new);
	show_item($run_new);
}



/*-------------------- Show items ------------------*/

function show_item($got_it){
	while($keep_it = mysql_fetch_array($got_it)){


		$item_id = $keep_it['item_id'];
		$item_image = $keep_it['item_image'];
		$item_title = $keep_it['item_title'];
		$item_price = $keep_it['item_pice'];
		$item_desc1 = $keep_it['item_desc1'];
		$item_desc2 = $keep_it['item_desc2'];
		$item_desc3 = $keep_it['item_desc3'];
		$item_desc4 = $keep_it['item_desc4'];

		echo '

		<div class="a13gdf">
			<div class="it4im"><a href="product_details.php?product_id='.$item_id.'">';echo" <img src=$item_image width=90% height=97%> "; echo'</a></div>
			<div class="it4tl"><a href="product_details.php?product_id='.$item_id.'">';echo" $item_title ";echo'</a></div>
			<div class="it4ps"><b>Rs. '; echo" $item_price ";echo'</b></div>
			<div class="it4dsc"> <li>';
			echo" $item_desc1 "; echo' </li><li>'; echo "$item_desc2";echo'</li><li>';echo "$item_desc3"; echo'</li><li>'; echo "$item_desc4";echo'</li>
			</div>
		</div>

		';

	}
}

function show_product_details($pro_id){
	$get_pro = "SELECT * FROM items WHERE item_id='.$pro_id.'";
	$run_pro = mysql_query($get_pro);
	while ($keep_it = mysql_fetch_array($run_pro)) {
		# code...

		$item_id = $keep_it['item_id'];
		$item_image = $keep_it['item_image'];
		$item_title = $keep_it['item_title'];
		$item_price = $keep_it['item_pice'];
		$item_desc1 = $keep_it['item_desc1'];
		$item_desc2 = $keep_it['item_desc2'];
		$item_desc3 = $keep_it['item_desc3'];
		$item_desc4 = $keep_it['item_desc4'];

		echo '

			<div class="sho_img">';echo" <img src=$item_image width=90% height=97%> ";echo'</div>
			<div class="description"></div>

			<div class="details"></div>

		';
	}	
}










/*---------------------------------------------------------------------*/

function limit(){

	/*$sql = "SELECT your_primary_key_field FROM items";
	$result = mysqli_query($con, $sql);
	if(false === $result) {
	   throw new Exception('Query failed with: ' . mysqli_error());
	} else {
	   $row_count = mysqli_num_rows($result);
	   // free the result set as you don't need it anymore
	   mysqli_free_result($result);
	}*/


	global $con;

	$get_lprice = "SELECT * FROM items ORDER BY item_pice ASC";

	$run_lprice = mysql_query($get_lprice);

	$row_count = mysql_num_rows($run_lprice);

	echo "$row_count";

	$items_per_page = 30;

	$page_count = 0;
	if (0 === $row_count) {  
	    // maybe show some error since there is nothing in your table

	    echo "string";

	} else {
	   // determine page_count
	   $page_count = (int)ceil($row_count / $items_per_page);
	   // double check that request page is in range
	   if($page > $page_count) {
	        // error to user, maybe set page to 1
	        $page = 1;
	   }
	}

	// make your LIMIT query here as shown above


	// later when outputting page, you can simply work with $page and $page_count to output links
	// for example
	for ($i = 1; $i <= $page_count; $i++) {
	   if ($i === $page) { // this is current page
	       echo 'Page ' . $i . '<br>';
	   } else { // show link to other page   
	       echo '<a href="/menuitem.php?page=' . $i . '">Page ' . $i . '</a><br>';
	   }
	}


}





/*------------------------------------DETAILS PAGE---------------------------------*/










?>