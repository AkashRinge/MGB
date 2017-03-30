<?php
	session_destroy();
	header("../index.php");
	echo "<html><script>window.location.href='../index.html'</script></html>"
?>
