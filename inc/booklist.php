<?php include "connectDB.php" ?>
<?php
	$sql = "select title,author,genre,publishyear as year from books";
	$result = $db->query($sql);
	$result = $result->fetchAll();
?>
<html>
	<head>
		<title>List of Books</title>
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
		<style>
			ul
			{
				  list-style-type: none;
			}
			body {
			  font-family: "Roboto", helvetica, arial, sans-serif;
			  font-size: 16px;
			  font-weight: 400;
			  text-rendering: optimizeLegibility;
			}

			/*** Table Styles **/

			.table-fill {
			  background: white;
			  border-radius:3px;
			  border-collapse: collapse;
			  margin: auto;
			  max-width: 1200px;
			  padding:5px;
			  width: 100%;
			  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
			  animation: float 5s infinite;
			}
			 
			th {
			  color:#D5DDE5;
			  background:#1b1e24;
			  border-bottom:4px solid #9ea7af;
			  border-right: 1px solid #343a45;
			  font-size:18px;
			  font-weight: 100;
			  padding:24px;
			  text-align:left;
			  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
			  vertical-align:middle;
			}

	th:first-child {
	  border-top-left-radius:3px;
	}
	 
	th:last-child {
	  border-top-right-radius:3px;
	  border-right:none;
	}
	  
	tr {
	  border-top: 1px solid #C1C3D1;
	  border-bottom-: 1px solid #C1C3D1;
	  color:#666B85;
	  font-size:16px;
	  font-weight:normal;
	  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
	}
	 
	tr:hover td {
	  background:#4E5066;
	  color:#FFFFFF;
	  border-top: 1px solid #22262e;
	  border-bottom: 1px solid #22262e;
	}
	 
	tr:first-child {
	  border-top:none;
	}

	tr:last-child {
	  border-bottom:none;
	}
	 
	tr:nth-child(odd) td {
	  background:#EBEBEB;
	}
	 
	tr:nth-child(odd):hover td {
	  background:#4E5066;
	}

	tr:last-child td:first-child {
	  border-bottom-left-radius:3px;
	}
	 
	tr:last-child td:last-child {
	  border-bottom-right-radius:3px;
	}
	 
	td {
	  background:#FFFFFF;
	  padding:20px;
	  text-align:left;
	  vertical-align:middle;
	  font-weight:300;
	  font-size:12px;
	  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
	  border-right: 1px solid #C1C3D1;
	}

	td:last-child {
	  border-right: 0px;
	}

	th.text-left {
	  text-align: left;
	}

	th.text-center {
	  text-align: center;
	}

	th.text-right {
	  text-align: right;
	}

	td.text-left {
	  text-align: left;
	}

	td.text-center {
	  text-align: center;
	}

	td.text-right {
	  text-align: right;
	}

			span
			{
				color: black;
			}
		</style>		
		<link rel="shortcut icon" href="Logo.ico" >
	</head>
	<body>
		<?php include "navbar.php" ?>
		<?php include "sidebar.php" ?>		
		<div id="hacker-list" class="container" style="margin-top: 6%">	  
		  <div class="row"><div class="col-sm-2"></div><div class="col-sm-6">SEARCH:<input id = "search" class="search form-control" placeholder="Enter title/author" /></div></div><br>
		  <div class="row"><div class="col-sm-2"></div>
		  <div class="col-sm-8">
		  <table class="table-fill" width="100%">
			<tr>
				<th class="text-left sort" data-sort="title">Sort by title</th>
				<th class="text-left sort" data-sort="author">Sort by author</th>
				<th class="text-left sort" data-sort="year">Sort by year of publishing</th>
				<th class="text-left sort" data-sort="genre">Sort by genre</th>
			</tr>
			<tbody class="list table-hover">
		  <?php
			foreach($result as $row)
			{
				echo "<tr name='".$row["title"]."' onclick='myFunction(this)'>
						 <td class='text-left'><h5 class='title'>".$row["title"]."</h5></td>
						 <td class='text-left'><h5 class='author'>".$row['author']."</h5></td>
						 <td class='text-left'><h5 class='year'>".$row['year']."</h5></td>
						 <td class='text-left'><h5 class='genre'>".$row['genre']."</h5></td>
						</tr>";
			}
		  ?>
			</tbody>
		  </table>
		  </div>
		  </div>
		</div>
		<script>			
			var options = {
			  valueNames: [ 'title', 'author', 'year', 'genre' ]
			};

			var hackerList = new List('hacker-list', options);
			
						
			$(document).ready(function(){
			   
			   var dynamic = $(document).height();
			 
			 var static = $('.mynav');    
				
			 static.css({
			  'min-height': dynamic,
			  'max-height': dynamic
			  });
			});
			
			function myFunction(element)
			{
				var f = document.createElement("form");
				f.setAttribute('method',"post");
				f.setAttribute('action',"details.php");
				
				var i = document.createElement("input");
				i.type = "hidden";
				i.value = element.getAttribute("name");
				i.name = "title";
				
				f.appendChild(i);
				document.getElementsByTagName('body')[0].appendChild(f);
				f.submit();
			}
		</script>
	</body>
</html>
	
