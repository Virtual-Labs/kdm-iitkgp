<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mechanical Engineering Department(IIT KGP) &rsaquo; Log In</title>
<link rel='stylesheet' id='login-css'  href='styles/login.css' type='text/css' media='all' />

<meta name='robots' content='noindex,nofollow' />
<script type="text/javascript" src="ajaxFunctions/ajaxfunctions.js"></script>
</head>

<body class="login">
<div id="login">
  <div id="" style="margin-bottom:10px; float:left;"><img src="../images/iit_logo.png" /></div>
  <div id="" style="margin-left:110px;padding-top:40px; font-family:Arial;font-size:22px; font-weight:bold; margin-bottom:30px;">Welcome to VLS-01</div>
 <!-- <div id="" style="clear:both; visibility:hidden;"><p class="message">	You are now logged out.<br /></p></div>-->



<form name="loginform" id="loginform" action="#" method="post">
	<p>
		<label>Username<br />
		<input type="text" name="username" id="username" class="input" value="" size="20" tabindex="10" /></label>
	</p>
	<p>
		<label>Password<br />

		<input type="password" name="password" id="password" class="input" value="" size="20" tabindex="20" /></label>
	</p>
	<p class="submit">
		<input type="button" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" style="background-color:#CCCCCC;" onclick="javascript: checkAdminLogin();"/>
	</p>

</form>

<!--<p id="nav">
<a href="#" title="Password Lost and Found">Lost your password?</a>
</p>-->
<div id="msg" style="width:100%; height:50px;  text-align:center; margin-top:10px; color:#FF0000; font-weight:bold; font-family: Verdana, Arial, Helvetica, sans-serif; font-size:15px;"></div>
	</div>

</body>
</html>

<script type="text/javascript">
function checkAdminLogin(){
ajaxAdminLoginCheck(document.getElementById('username').value,document.getElementById('password').value,"admin")
}
</script>
