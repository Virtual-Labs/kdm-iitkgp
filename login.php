<html>
<head><title>Mechanical Engineering Department(IIT KGP)</title></head>
<body>
<div class="login-form">
  <div class="wrapper-header">
    <?php include("header.php"); ?>
  </div>
  <?php  $referer = ""; if(isset($_SERVER['HTTP_REFERER']))  $referer = $_SERVER['HTTP_REFERER']; ?>

  <?php //echo print_r($_SESSION); ?>
 
  <!-- End of Wrapper class -->
  <div class="wrapper-content">
    <div id="logintitle">Virtual Lab-01 Sign In</div>
    <div id="divseperator"></div>
    <div id="loginbyothers">
      <div id="otherHeader"><div style="padding-top:4px;">Sign in using open ID</div></div>   <!--177639729007660-->
	  <div id="openIdText"><p>If you use any of the following services, you already have your own OpenID. Please choose one and associate it with our website. You will be taken to the respective providers website and our website will never see your password or other personal information.</p>
<p>We use the name and email address that provider gives us to set up your account. We hate spam as much as you do and will never ever share your email with a third party service.</p></div>
	  
	<?php //include('facebook/facebook_login.php'); ?>
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=177639729007660";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	  
<div class="fb-login-button" autologoutlink="true" data-show-faces="false" data-width="200" scope="email" data-max-rows="1"></div>-->
	  <!--<a href="http://www.facebook.com/dialog/oauth/?scope=email,user_birthday&client_id=177639729007660&redirect_uri=http://vls1.iitkgp.ernet.in/vls_web/login.php&response_type=token">Login with facebook</a>-->
	  
	  <script> 
//	  var accessToken="";
//     function displayUser(user) {
//	  alert(accessToken);
//       var userName = document.getElementById('FBuserName');
//       var greetingText = document.createTextNode('Greetings, '+ user.locale + '.');  //gender,birthday,first_name,last_name,id,email,username,locale
//   FBuserName.appendChild(greetingText);
//   //alert(user.length);
//   var xx = "<a href='https://www.facebook.com/logout.php?next=YOUR_URL&access_token="+accessToken+"'></a>";
//   document.getElementById('dd').innerHTML = "<a href='https://www.facebook.com/logout.php?next=YOUR_URL&access_token="+accessToken+"'></a>";
//     }
//
//     var appID = "177639729007660";
//     if (window.location.hash.length == 0) {
//       var path = 'https://www.facebook.com/dialog/oauth?';
//   var queryParams = ['client_id=' + appID,'redirect_uri=' + window.location,'response_type=token'];
//   var query = queryParams.join('&');
//   var url = path + query;
//   window.open(url);
//     } else {
//       accessToken = window.location.hash.substring(1);
//       var path = "https://graph.facebook.com/me?";
//   var queryParams = [accessToken, 'callback=displayUser'];
//   var query = queryParams.join('&');
//   var url = path + query;
//
//   // use jsonp to call the graph
//       var script = document.createElement('script');
//       script.src = url;
//       document.body.appendChild(script);        
//     }
  </script> 
   <!--<p id="FBuserName"></p> 
   <div id="dd"></div>-->
<?php
   /*$app_id = "177639729007660";
   $app_secret = "74a990aa2b19b4e28bc55eae31b6995f";
   $my_url = "http://vls1.iitkgp.ernet.in/vls_web/login.php";

   session_start();
   $code = $_REQUEST["code"];

   if(empty($code)) {
     $_SESSION['state'] = md5(uniqid(rand(), TRUE)); //CSRF protection
     $dialog_url = "http://www.facebook.com/dialog/oauth?client_id=" 
       . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
       . $_SESSION['state'];

     echo("<script> top.location.href='" . $dialog_url . "'</script>");
   }

   if($_REQUEST['state'] == $_SESSION['state']) {
     $token_url = "https://graph.facebook.com/oauth/access_token?". "client_id=" . $app_id ."&redirect_uri=" .urlencode($my_url). "&client_secret=" . $app_secret . "&code=".$code;
     $response = file_get_contents($token_url);
     $params = null;
     parse_str($response, $params);
     echo "<br>";
     $graph_url = "https://graph.facebook.com/me?access_token=". $params['access_token'];
     echo "<br>";
     $user = json_decode(file_get_contents($graph_url));
     //echo("Hello " . $user->name);
   }
   else {
     echo("The state does not match. You may be a victim of CSRF.");
   }*/
   

 ?>
	 <?php //echo "<pre>"; print_r($_SESSION); echo "</pre>";?>
	  
    </div><!-- end of loginbyothers div -->
    <div id="loginseperator"><img src="images/seperator_line.png"></div>
    <div id="logindirect">
      <div id="otherHeader"><div style="padding-top:4px;">Enter your user name and password</div></div>
      <div id="login">
	    <div id="loginMsg"></div>
        <form action="#" method="post">
          <div id="username"><span style="margin-right:20px;">Username :</span> <span>
            <input type="text" id="usrnam" name="usrnam" value="" />
            </span> </div>
          <div id="password" style="margin-bottom:20px;"><span style="margin-right:20px;">Password :</span> <span>
            <input type="password" id="passwd" name="passwd" value="" />
            </span> 
		  </div>
          <div id="lbuttons">
          <span style="margin-left:192px;margin-right:5px; float:left;">
		  <input type="hidden" id="referer" value="<?php echo $referer;?>" />
          <input type="image" onClick="javascript: userLoginCheck(); return false;" src="images/login.png" style="width:90px;" /> 
		  <!--<input type="button"   <!-- ajaxUserLoginCheck-->
          </span>
        </form>
		<form action="registration.php" method="post">
        <span style="margin-right:90px;">
        <input type="image" src="images/register.png"  style="width:90px;">
        </span> 
		</form>
		</div>

    </div>
    
  </div>
  <div style="clear:both;"></div>
  <!-- end of logindirect div -->
</div>
<!-- end of wrapper-content class -->
<div class="wrapper-footer">
<?php
include('footer.php');
?>
</div><!-- End of wrapper-footer div -->


<!-- end of login-form -->
<script type="text/javascript">
function userLoginCheck()
{
 ajaxUserLoginCheck(document.getElementById('usrnam').value,document.getElementById('passwd').value,document.getElementById('referer').value);
}
</script>
</body>
</html>