<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Findmyfare.com</title>
	<link rel="stylesheet" href="login_css.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!--<script language="javascript" type="text/javascript" > 
          function vaidate()
           {
                  var x = document.fmflogin.email.value;
                  
                  var y = document.fmflogin.password.value;
                  
                  if(x === '')
                  {
                     document.getElementById('error').innerHTML="Please Enter Username";
                     return false;
                  }
                  if(y === '')
                  {
                    document.getElementById('error').innerHTML="Please Enter Password";
                    return false;
                  }
           }
        </script> -->
        <style>
            body {
/*	background-color: #C0C0C0;*/
	//color: #000;
	
	font-size: 16px;
	line-height: 1.3em;
        
        
}
/*@font-face {
  font-family: "Glyphicons Halflings";
  src: url("/dist/fonts/bootstrap/glyphicons-halflings-regular.eot?#iefix") format("embedded-opentype"), 
      url("/dist/fonts/bootstrap/glyphicons-halflings-regular.woff") format("woff"),
      url("/dist/fonts/bootstrap/glyphicons-halflings-regular.ttf") format("truetype"),
      url("/dist/fonts/bootstrap/glyphicons-halflings-regular.svg#glyphicons_halflingsregular") format("svg");
}*/
input {
	border: none;
	font-family: inherit;
	font-size: inherit;
	font-weight: inherit;
	line-height: inherit;
	-webkit-appearance: none;
}
title{font-family: "Glyphicons Halflings", Arial, Helvetica, sans-serif;}
/* ---------- LOGIN ---------- */

#login {
	margin: 60px auto;
	width: 450px;
}

#login pre {
	background-color: #CED8F6;
	-webkit-border-radius: 20px 20px 0 0;
	-moz-border-radius: 20px 20px 0 0;
	border-radius: 20px 20px 0 0;
	color: #2E9AFE;
	font-size: 32px;
	padding: 30px 30px;
        width: 440px;
        font-family:  sans-serif;
        
}



#login fieldset {
	background-color: #f5e79e;
	-webkit-border-radius: 0 0 20px 20px;
	-moz-border-radius: 0 0 20px 20px;
	border-radius: 0 0 20px 20px;
        border-color: white;
        border-bottom-color: white;
	padding: 27px 29px;
        width: 440px;
        
}

#login fieldset p {
	color: #fff;
	margin-bottom: 10px;
        
}

#login fieldset p:last-child {
	margin-bottom: 10px;
}

#login fieldset input {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

#login fieldset input[type="email"], #login fieldset input[type="password"] {
	background-color: #fff;
	color: #777;
	padding: 5px 10px;
	width: 328px;
}

#login fieldset input[type="submit"] {
	background-color: #33cc77;
	color: #fff;
	display: block;
	margin: 0 auto;
	padding: 4px 0;
	width: 100px;
        position: absolute; 
        left: 550px; top: 390px;
}
#login fieldset input[type="reset"]
{
    background-color: #33cc77;
	color: #fff;
	display: block;
	margin: 0 auto;
	padding: 4px 0;
	width: 100px;
        position: absolute;
       left: 700px; top: 390px;
}

</style>
</head>
<body background="abc.jpg">

      <div id="login" >        
          <pre> find<span style="color:#FF4000">my</span>fare.com<span style="color:#0000FF"><b> - Sign In </b></span>  </pre>      
                <!--<span class="fontawesome-lock"></span>-->
          <form  name="fmflogin" action="verify">
                    	<fieldset>
				<p><label for="email">E-mail address</label></p>
                                <p><input type="email" name="email" id="email" placeholder="mail@address.com" required="required"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->
				<p><label for="password">Password</label></p>
                                <p><input type="password" name="password" id="password" placeholder="password" required="required"></p>
                                <div class="checkbox">
                                    <label><input type="checkbox"><font color="white"> Remember me</font></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="link">Click Here to register</a>
                                </div>                              
                                <input type="submit" class="btn btn-success" value="Login"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="reset" class="btn btn-primary" value="Cancel" > 
                              
			</fieldset>
		</form>
              
     
	</div>
   <!-- end login -->
</body>	
</html>
