<?php include "connectDB.php" ?>
<?php
	if(isset($_POST["password"]))
	{
		$name = $_POST["fullname"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$sql = "insert into users(name, password, email) values ('".$name."', '".$password."', '".$email."')";
		$result = $db->query($sql);
		
		if(isset($_POST["imagelink"]))
		{
			$imagelink = $_POST["imagelink"];
			$sql = "update users set imagelink = '".$imagelink."' where name = '".$name."' and password = '".$password."'";
			$result = $db->query(); 
		}
	}
	session_start();
	$_SESSION["user"] = $email;
?>
<html>
	<head>
		<meta http-equiv="refresh" content="0;url=profile.php" />
	</head>
</html>
