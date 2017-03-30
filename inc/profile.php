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
<script type="text/javascript">
	$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});

function changeEditable()
{
	var name=document.getElementById("name");
	var age=document.getElementById("age");
	var dob=document.getElementById("dob");
	var gender=document.getElementById("gender");
	var address=document.getElementById("address");
	var email=document.getElementById("email");
	var phone=document.getElementById("phone");

	name.contentEditable="true";
	age.contentEditable="true";
	dob.contentEditable="true";
	gender.contentEditable="true";
	address.contentEditable="true";
	email.contentEditable="true";
	phone.contentEditable="true";


}

</script>
<div class="container" style="padding-top: 20px; margin-top: 10%">
      <div class="row">
      
   <!--     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >-->
   
   
          <div class="panel panel-info" style="margin-left: 35%">
            <div class="panel-heading">
              <h3 class="panel-title">Akash Ringe</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/13435444_10209626982461666_4041367671790733250_n.jpg?oh=9ee8169a5e5bb8256af8555c0a1cd2bc&oe=58BEB1A0" class="img-circle img-responsive"> </div>
                
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
                        <td>Name:</td>
                        <td id="name">Akash Ringe</td>
                      </tr>
                      <tr>
                        <td>Age:</td>
                        <td id="age">19</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td id="dob">03/10/1996</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td id="gender">Male</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td id="address">Manipal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td id="email"><a href="mailto:blazingakash@gmail.com">blazingakash@gmail.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td id="phone">123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <center><a onclick="changeEditable()" class="btn btn-primary">Edit Profile</a></center>
                  
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
