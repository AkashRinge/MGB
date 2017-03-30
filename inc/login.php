<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Custom Login Form</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
      <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>
  <div id="wrapper">
	<div class="join">Join Today</div>
    	<div class="lock"></div>
	        <div class="clr"></div>
    	    	<div class="login-options">Choose on of the following sign up methods.</div>
                    <                    
<div class="container">
  <ul class="nav nav-tabs" style="border: 1px solid transparent">
    <li class="active"><a data-toggle="tab" href="#menu1">Sign Up</a></li>
    <li><a data-toggle="tab" href="#menu2">Login</a></li>
  </ul>

  <div class="tab-content">

    <div id="menu1" class="tab-pane fade in active">
      <div class="clr"></div>
                                <div class="forms">
                                    <form action="loginscript.php" method="post" name="register">
                                    <input name="fullname" type="text" placeholder="Enter your full name..." size="40" style="width: -moz-available;" onClick="border: 1px solid #30a8da;" id="username" required=""/>
                                    <input name="email" type="text" placeholder="Enter your email address..." size="40" style="width: -moz-available;" onClick="border: 1px solid #30a8da;" id="mail" required=""/>
                                    <input name="password" type="password" placeholder="Enter a password..." size="40" style="width: -moz-available;" onClick="border: 1px solid #30a8da;" id="password" required=""/>
                                     <input type="submit" class="create-acc" style="margin-bottom:50px" value="Create My Account"/>
                                    </form>
                                    </div>
     
             <fb:login-button style="margin-top:-10%;" size=xlarge scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
    </div>
    <div id="menu2" class="tab-pane fade">
    <div class="clr"></div>
        <div class="forms">
                                    <form action="authenticate.php" method="post" name="login">
                                    <input name="email" type="text" placeholder="Enter your email address..." size="40" style="width: -moz-available;" onClick="border: 1px solid #30a8da;" id="mail" required=""/>
                                    <input name="password" type="password" placeholder="Enter a password..." size="40" style="width: -moz-available;" onClick="border: 1px solid #30a8da;" id="password" required=""/>
                                    <input type="submit" class="create-acc" style="margin-bottom:50px" value="Login" />
                                    </form>
                                    </div>
                                    
                                     <fb:login-button style="z-index: 1000; position: absolute;" size=xlarge scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
      
    </div>
   

                                    

  </div>

  

</div>

              <!--      <a class="google" href="#">Google+</a>  -->
                    
</div>

<script>
  var userID="";
  var name = "x";
  var imagelink = "x";
  var email = "x";
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      userID=response.authResponse.userID;
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '226864937743677',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/'+userID+'/picture?height=200&weight=200', function(response) {
      // console.log('Email ID is : ' + response.email);
      // document.getElementById('status').innerHTML =
      //   'Thanks for logging in, ' + response.name + '!';
        console.log(response);
        imagelink = response.url;
    });
    FB.api('/'+userID, function(response) {
		name = response.name
		email = response.email;
        console.log(response);
        
      var password = prompt("Enter your password: ");
	  
	  var form = document.getElementsbyName("register")[0];
	  var inputname = document.getElementsbyName("fullname")[0];
	  var inputpass = document.getElementsbyName("password")[0];
	  var inputemail = document.getElementsbyName("email")[0];
	  var inputimage = document.createElement("input");
	  inputimage.type = "hidden";
	  inputimage.name = "imagelink";
	  form.appendChild(inputimage);
	  
	  inputpass.value = password;
	  inputname.value = name;
	  inputemail.value = email;
	  
	  form.submit();
    });
  }
	
</script>
  
</body>
</html>
