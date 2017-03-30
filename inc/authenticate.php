<?php
	include "connectDB.php" ;
	if(isset($_POST["password"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		$sql = "select count(*) from users where email = '".$email."' and password = '".$password."';";
		$result = $db->query($sql)->fetch()[0];
		if($result == 0)
			echo "<html><script>alert('LOGIN FAILED PLEASE TRY AGAIN'); document.location.href = 'login.php';</script></html>";
		else
			echo "<html><script>document.location.href = 'profile.php';</script></html>";
	}
?>
