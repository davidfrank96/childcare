
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: page.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="login.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
</head>

<style type="text/css">
	
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700);
 @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
 body, html {
   height: 100%;
}
 body {
   font-family: 'Open Sans';
   font-weight: 100;
   display: flex;
   overflow: hidden;
}
 input ::-webkit-input-placeholder {
   color: rgba(255, 255, 255, 0.7);
}
 input ::-moz-placeholder {
   color: rgba(255, 255, 255, 0.7);
}
 input :-ms-input-placeholder {
   color: rgba(255, 255, 255, 0.7);
}
 input:focus {
   outline: 0 transparent solid;
}
 input:focus ::-webkit-input-placeholder {
   color: rgba(0, 0, 0, 0.7);
}
 input:focus ::-moz-placeholder {
   color: rgba(0, 0, 0, 0.7);
}
 input:focus :-ms-input-placeholder {
   color: rgba(0, 0, 0, 0.7);
}
 .login-form {
  
    min-height: 10rem;
    margin: auto;
    max-width: 80%;
    padding: 0.5rem;
}
 .login-text {
   color: white;
   font-size: 1.5rem;
   margin: 0 auto;
   max-width: 50%;
   padding: 0.5rem;
   text-align: center;
}
 .login-text .fa-stack-1x {
   color: black;
}
 .login-username, .login-password {
   background: transparent;
   border: 0 solid;
   border-bottom: 1px solid rgba(255, 255, 255, .5);
   color: white;
   display: block;
   margin: 1rem;
   padding: 0.5rem;
   transition: 250ms background ease-in;
   width: calc(100% - 3rem);
}
 .login-username:focus, .login-password:focus {
   background: white;
   color: black;
   transition: 250ms background ease-in;
}
 .login-forgot-pass {
   bottom: 0;
   color: white;
   cursor: pointer;
   display: block;
   font-size: 75%;
   left: 0;
   opacity: 0.6;
   padding: 0.5rem;
   position: absolute;
   text-align: center;
   width: 100%;
}
 .login-forgot-pass:hover {
   opacity: 1;
}
 .login-submit {
  width: 100%;
	 padding: 10px;
	 color: #fff;
	 margin-top: 10px;
	 max-width: 200px;
	 text-align: center;
	 border-radius: 10px;
	 border: solid 1px #15c3da;
	 background-color: #293542e6;
	 -webkit-transition: color 0.2s ease-in, background-color 0.2s ease-in;
	 -moz-transition: color 0.2s ease-in, background-color 0.2s ease-in;
	 -ms-transition: color 0.2s ease-in, background-color 0.2s ease-in;
	 -o-transition: color 0.2s ease-in, background-color 0.2s ease-in;
	 transition: color 0.2s ease-in, background-color 0.2s ease-in;
}
 .login-submit:hover, .login-submit:focus {
   background: white;
   color: black;
   transition: 250ms background ease-in;
}
 [class*=underlay] {
   left: 0;
   min-height: 100%;
   min-width: 100%;
   position: fixed;
   top: 0;
}
 .underlay-photo {
   animation: hue-rotate 6s infinite;
  background-image: url('/childcare/images/111.jpg');
   background-size:  100% 100%;
   background-repeat: no-repeat;
   -webkit-filter: grayscale(30%);
   z-index: -1;
}

 .underlay-black {
   background: rgba(0, 0, 0, 0.7);
   z-index: -1;
}
 @keyframes hue-rotate {
   from {
     -webkit-filter: grayscale(30%) hue-rotate(0deg);
  }
   to {
     -webkit-filter: grayscale(30%) hue-rotate(360deg);
  }
}
 
</style>
<body>

	<form class="login-form" action= "" Method ="POST">
	<!--	<h2  style=" color: white; padding: 15px; height: 45px; border-radius: 10px; text-align: center; background-image: linear-gradient(to top left, #3a2156e3 29%, #d58fe6 70%, white 200%); ">Login To Child Care</h2> 
  <p class="login-text">

    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>

  </p>
  -->
   <h4 style="color: red;"><?php echo $error; ?></h4>
  <input type="text" class="login-username" name="username" autofocus="true" required="true" placeholder="Username" />
  <input type="password" name="password" class="login-password" required="true" placeholder="Password" />
  <input type="submit" name="submit" value="Login" class="login-submit" />
</form>
<h4><a href="register.php" class="login-forgot-pass">New Here? Sign Up Here!</a></h4>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 

</body>
</html>