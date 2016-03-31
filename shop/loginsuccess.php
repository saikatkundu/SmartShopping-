<? 
session_start();
if( !isset( $_SESSION['myusername'] ) ){
header("location:account.html");
}

echo "Welcome, . $_SESSION['myusername'] .  You are now logged in.<br>";

echo "<a href=logout.php>Logout</a>"
?>

<html>
<body>

</body>
</html>