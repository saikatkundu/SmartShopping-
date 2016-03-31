
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message


		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password="saikat"; // Mysql password 
		$db_name="shop"; // Database name 
		$tbl_name="users"; // Table name 

		// Connect to server and select databse.
		$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysql_select_db("$db_name",$con)or die("cannot select DB");

		// username and password sent from form 
		$myusername=$_POST['email']; 
		$mypassword=$_POST['password']; 


		// To protect MySQL injection (more detail about MySQL injection)

		$myusername = stripslashes($myusername);//ai gulo kano use korechis??........ki jenio vule gechi..n.a. use korle o hot any way bad de

		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);

		//Select data from db

		$sql="SELECT * FROM $tbl_name WHERE (email='".$myusername."' and password='".$mypassword."')";

		$result=mysql_query($sql)or die(mysql_error());

		$get_res = mysql_fetch_array($result);
		$user = $get_res['name'];

		// Mysql_num_row is counting table row
		$count= mysql_num_rows($result);


		// If result matched $myusername and $mypassword, table row must be 1 row

		if($count == 1){//dara

		// Register $myusername, $mypassword and redirect to file "login_success.php"
			session_start();
			$_SESSION['login_user'] = $user;
			echo "hi &nbsp;". $_SESSION['login_user'];
			header("location:http://localhost:80/shop/index.php");
			
			// header("location:http://localhost:80/shop/dbcon.php");
		}
		else {
			// echo'invalid username or password';
			// header("location:http://localhost:80/shop/signup.php");
			mysql_close($con);
			
			die(header("location:http://localhost:80/shop/signup.php?loginFailed=true&reason=password"));

		}
	
?>