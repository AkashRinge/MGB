<html>
<head>
<meta charset="utf-8">
		<meta name="description" content="">  
		<meta name="author" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">   
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/base.css">

		<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100)" rel='stylesheet' type='text/css'/>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<!--BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.3.0/list.min.js"></script>
		<script src="../js/main.js"></script>
</head>
<body>
<?php include "navbar.php" ?>
<div style="margin-top: 10%">
<?php include "sidebar.php" ?>
	<h1 style="color: black">
		<center>NO BOOKS UPLOADED AS OF YET</center>
	</h1>
</div>
</body>
<script>
	$(document).ready(function(){
			   
			   var dynamic = $(document).height();
			 
			 var static = $('.mynav');    
				
			 static.css({
			  'min-height': dynamic,
			  'max-height': dynamic
			  });
			});
</script>
</html>

