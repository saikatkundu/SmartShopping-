

<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="saikat"; // Mysql password 
$db_name="shop"; // Database name 
$tbl_name="users"; // Table name  

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name",$con)or die("cannot select DB");

// content sent from form 
$myname= mysql_real_escape_string($_POST['username']) ;
$email= mysql_real_escape_string($_POST['email']); 
$mypassword= mysql_real_escape_string($_POST['password1']); 
$mypassverify= mysql_real_escape_string($_POST['password2']); 
$myphone= mysql_real_escape_string($_POST['phone']);
$myaddress= mysql_real_escape_string($_POST['address']);



if($mypassverify == $mypassword){
	$sql=mysql_query("INSERT INTO $tbl_name(name,email,password,ph_no,address) VALUES('$myname','$email','$mypassword',$myphone,'$myaddress')")or die("This email is already resistered");
	
	if($sql){
		
		?>

        <script>alert('successfully registered ');</script>
        <?php
        header("location:http://localhost:80/shop/index.php");
	}
	else{
		?>
		<script>alert('error while registering you...');</script>
		<?php
		
	}
}
else{
	?>
	<script>alert('password not mached...');</script>
	<?php
}



?>