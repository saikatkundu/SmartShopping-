<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="saikat"; // Mysql password 
$db_name="shop"; // Database name 
$tbl_name="items"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$as = mysql_select_db("$db_name",$con)or die("cannot select DB");

//set the variable with empty value..

$itemtitle = $itemcat = $itembrand = $subcat = $itemprice = $itemimage = $itemdesc1 = $itemdesc2 = $itemdesc3 = $itemdesc4 = "";


// data sent from form 

$error = NULL;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST['title'])){
		$titleErr = $error = "Please Give A Title..";
	}else{
		$itemtitle = test_input($_POST['title']);
	}

	if (empty($_POST['category'])){
		$pcatErr = $error = "Please Select A Category..";
	}else{
		$itemcat = test_input($_POST['category']);
	}

	if (empty($_POST['brand'])){
		$brandErr = $error = "Please Give A Brand Name..";
	}else{
		$itembrand = test_input($_POST['brand']);
	}

	if (empty($_POST['sub_cat'])){
		$scatErr = $error = "Please Select A Sub_Category..";
	}else{
		$subcat = test_input($_POST['sub_cat']);
	}

	if (empty($_POST['price'])){
		$priceErr = $error = "Please Give Product Price..";
	}else{
		$itemprice = test_input($_POST['price']);
	}

	if (empty($_POST['image'])){
		$imageErr = $error = "Please Give A Image Location..";
	}else{
		$itemimage = test_input($_POST['image']);
	}

	if (empty($_POST['desc1'])){
		$desc1Err = $error = "Please Give A Product Description..";
	}else{
		$itemdesc1 = test_input($_POST['desc1']);
	}

	if (empty($_POST['desc2'])){
		$desc2Err = $error = "Please Give A Product Description..";
	}else{
		$itemdesc2 = test_input($_POST['desc2']);
	}

	if (empty($_POST['desc3'])){
		$desc3Err = $error = "Please Give A Product Description..";
	}else{
		$itemdesc3 = test_input($_POST['desc3']);
	}

	if (empty($_POST['desc4'])){
		$desc4Err = $error = "Please Give A Product Description..";
	}else{
		$itemdesc4 = test_input($_POST['desc4']);
	}
}

// $itemtitle = $_POST['title']; 
// $itemcat = $_POST['category']; 
// $itembrand = $_POST['brand'];
// $subcat = $_POST['sub_cat'];
// $itemprice = $_POST['price'];
// $itemimage = $_POST['image'];
// $itemdesc1 = $_POST['desc1'];
// $itemdesc2 = $_POST['desc2'];
// $itemdesc3 = $_POST['desc3'];
// $itemdesc4 = $_POST['desc4'];


// To protect MySQL injection (more detail about MySQL injection)

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


// $itemtitle = stripslashes($itemtitle);
// $itemcat = stripslashes($itemcat);
// $itembrand = stripslashes($itembrand);
// $subcat = stripslashes($subcat);
// $itemprice = stripslashes($itemprice);
// $itemimage = stripslashes($itemimage);
// $itemdesc1 = stripslashes($itemdesc1);
// $itemdesc2 = stripslashes($itemdesc2);
// $itemdesc3 = stripslashes($itemdesc3);
// $itemdesc4 = stripslashes($itemdesc4);

// $itemtitle = mysql_real_escape_string($itemtitle);
// $itemcat = mysql_real_escape_string($itemcat);
// $itembrand = mysql_real_escape_string($itembrand);
// $subcat = mysql_real_escape_string($subcat);
// $itemprice = mysql_real_escape_string($itemprice);
// $itemimage = mysql_real_escape_string($itemimage);
// $itemdesc1 = mysql_real_escape_string($itemdesc1);
// $itemdesc2 = mysql_real_escape_string($itemdesc2);
// $itemdesc3 = mysql_real_escape_string($itemdesc3);
// $itemdesc4 = mysql_real_escape_string($itemdesc4);

//bara seta bolteparish nii...dur dur ..dara acta change korchii





//Select data from db



//$sql=mysql_query("INSERT INTO $tbl_name(item_category,item_brand,item_title,item_pice,item_image,item_type,item_desc1,item_desc2,item_desc3,item_desc4) VALUES('$itemcat','$itembrand','$itemtitle','$itemprice','$itemimage','$subcat','$itemdesc1','$itemdesc2','$itemdesc3','$itemdesc4')") or die mysql_error();


if(!$error){
	$sql=mysql_query("INSERT INTO ".$tbl_name."(item_category,item_brand,item_title,item_pice,item_image,item_type,item_desc1,item_desc2,item_desc3,item_desc4) VALUES('$itemcat','$itembrand','$itemtitle','$itemprice','$itemimage','$subcat','$itemdesc1','$itemdesc2','$itemdesc3','$itemdesc4')");

	if($sql){
		echo "Successfully inserted.......<br>";
		echo"Item: $itemtitle <br>";
		echo"Category: $itemcat <br>";
		echo"Brand: $itembrand <br>";
		echo"Sub Cat:  $subcat <br>";
		echo"Price: $itemprice <br>";
		echo"Image: $itemimage <br>";
		echo"Desc1: $itemdesc1 <br>";
		echo"Desc2: $itemdesc2 <br>";
		echo"Desc3: $itemdesc3 <br>";
		echo"Desc4: $itemdesc4 <br>";
		echo '<br>
		Insert a <a href="http://localhost/shop/insert.php">new</a> Product


		';
	}else{
		
		echo '<br>
		Some Problem has Ocer At The Time of Insertion...Please <a href="http://localhost/shop/insert.php">Try Again</a>


		';
	}

}else{
	
		
	echo '
	You may left one or more field blank, please fill up all the fields and <a href="http://localhost/shop/insert.php">Try Again</a> to insert a <a href="http://localhost/shop/insert.php">New</a> Product <br><br>
	or go to <a href="http://localhost/shop/index.php">Home</a>               Page.......


	';
}
	



?>