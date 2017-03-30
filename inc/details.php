<?php include "connectDB.php" ?>
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
		<?php
			if(!isset($_POST["title"]))
				echo "<script>window.location.href = 'booklist.php'</script>";
			else
			{
				$sql = "select * from books where title = '".$_POST["title"]."'";
				$result = $db->query($sql)->fetch();
				$title = $result["title"];
				$author = $result["author"];
				$year = $result["publishyear"];
				$genre = $result["genre"];
				$description = $result["description"];
				$imagelink = $result["imagelink"];
			}
		
		?>
<style type="text/css">
	
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px ;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}




</style>
</head>
<body>
<?php include "navbar.php" ?>
<?php include "sidebar.php" ?>
<div class="container" style="padding-top: 20px; margin-top: 10%">
      <div class="row">
      
   <!--     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >-->
   
   
          <div class="panel panel-info" style="margin-left: 35%">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $_POST["title"] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $imagelink ?>" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Title</td>
                        <td id="name"><?php echo $title ?></td>
                      </tr>
                      <tr>
                        <td>Publish year</td>
                        <td id="dob"><?php echo $year ?></td>
                      </tr>
                         <tr>
                             <tr>
                        <td>Author</td>
                        <td id="gender"><?php echo $author ?></td>
                      </tr>
                        <tr>
                        <td>Genre</td>
                        <td id="address"><?php echo $genre ?></td>
                      </tr>
                        <td>Description</td>
                        <td id="phone"><?php echo $description ?>
                        </td>
                           
                      </tr>
                     <tr>
						<td>Email</td>
                        <td id="email"><a href="mailto:maangobook@gmail.com">maangobook@gmail.com</a></td>
                      </tr>
                     </tr>
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
                 
            
          </div>
     <!--   </div>-->
      </div>
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
