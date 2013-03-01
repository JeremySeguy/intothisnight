<?php
	session_start();
	
	if(session_is_registered(email)){
		header("location:main.php");
	}
	
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
?>

<!DOCTYPE html>
    <head>
        <title>Into This Night</title>
        
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
        <link rel="stylesheet" href="stylesheets/general.css" />
        <link rel="stylesheet" href="stylesheets/index.css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="javascripts/ajax.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
    </head>
    
    <body>     
    <div id="home" data-role="page">
    	<!-- /header -->        
    	<div id="header" data-role="header" data-theme="c">
        	<h1>Admin Login</h1>
        </div> 
        <!-- /content -->
        <div data-role="content" data-inset="true">
        	<div id="wrapper">
                <form id="login" action="/checklogin.php" method="post" autocomplete="on" >
                <input id="email" name="email" type="text" id="email" onfocus="if(this.value == 'Email'){this.value = '';this.style.color='#000'}" value="Email">     
                <br>
                <input id="password" name="password" type="password" value="Password" id="password" onfocus="if(this.value == 'Password'){this.value = '';this.style.color='#000'}">
                <p id="returnmsg">
                </p>
                <input id="submitbtn" type="submit" value="Login">
                </form>
            </div>
   		</div>
    </div>
    </body>
</html>