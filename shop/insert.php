<?php 
	// include('dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>insert data</title>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	body{height:auto;width: 100%;overflow-x: hidden;overflow-y: scroll;}
	div{
		height: auto;
		width: 60%;
		float: left;
		margin-left: 20%;
		margin-top: 1%;
		background-color: #acf;
		align: center;
		background-size: cover;
		white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
    -ms-text-overflow:ellipsis;
	}
	form{
		background-color: #CC99FF ;
		align: center;
		margin: 2px;
		padding: 5px;
	}
	/*h2{
		margin-left: 30%;
		text-decoration: underline;
		color: #0066CC;
	}*/
	.error{
		color: red;
	}
	</style>
</head>
<body>
	<div>
		<form action="checkinsert.php" method="POST" enctype="multipart/form-data">
			
			<table align="center">
				<tr text-align="center"><h2>Insert a new product </h2><br></tr>
				<tr>
					<td>Title:</td>
					<td><input type="text" name="title" rows="2" cols="30"></td>
					<!-- <td><span class="error">* <?php echo $titleErr;?></span></td> -->
				</tr>
				<tr>
					<td>Category:</td>
					<td>
						<select name="category">
							<option>Select Category</option>
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
					</td>
					<!-- <td><span class="error">* <?php echo $pcatErr;?></span></td> -->
				</tr>
				<tr>
					<td>Brand:</td>
					<td><input type="text" name="brand"></td>
					<!-- <td><span class="error">* <?php echo $scatErr;?></span></td> -->
				</tr>
				<tr>
					<td>Sub cat Type:</td>
					<td>
						<select name="sub_cat">
							<option value="MOBILE">MOBILE</option>
							<option value="COMPUTER">COMPUTER</option>
							<option value="TABLET">TABLET</option>
							<option value="CAMERA">CAMERA</option>
							<option value="HEADPHONE">HEADPHONE</option>
							<option value="TV">TV</option>
							
						</select>
					</td>
					<!-- <td><span class="error">* <?php echo $priceErr;?></span></td> -->
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type="text" name="price"></td>
					<!-- <td><span class="error">* <?php echo $priceErr;?></span></td> -->
				</tr>
				<tr>
					<td>Image:</td>
					<td><input type="text" name="image" rows="2" cols="30" placeholder="give an image location"></td> 
					<!-- <td><span class="error">* <?php echo $imageErr;?></span></td> -->
				</tr>
				<tr>
					<td>Desc One:</td>
					<td><input type="text" name="desc1" rows="2" cols="30"></td>
					<!-- <td><span class="error">* <?php echo $desc1Err;?></span></td> -->
				</tr>
				<tr>
					<td>Desc Two:</td>
					<td><input type="text" name="desc2" rows="2" cols="30"></td>
					<!-- <td><span class="error">* <?php echo $desc2Err;?></span></td> -->
				</tr>
				<tr>
					<td>Desc Three:</td>
					<td><input type="text" name="desc3"></td>
					<!-- <td><span class="error">* <?php echo $desc3Err;?></span></td> -->
				</tr>
				<tr>
					<td>Desc Four:</td>
					<td><input type="text" name="desc4" rows="2" cols="30"></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><textarea name="desc" rows="10" cols="30" placeholder="please dont write anything here now.."></textarea> </td>
				</tr>
				<td></td>
				<td ><input style="float: left;height: 30px;width: 300px;margin-left: -20px;" type="submit" value="Insert Now"></td>
				<!-- <td><span class="error">* <?php echo $desc4Err;?></span></td> -->
				<!-- <tr><input style="float: left;height: 30px;width: 300px;margin-left: 70px;" type="submit" value="Insert Now"></tr> -->
			</table>
		</form>
	</div>

</body>
</html>