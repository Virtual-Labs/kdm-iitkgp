<div class="fb-login-button" autologoutlink="true" id="fblogin" scope="email,read_stream"></div>
<!--<div class="fb-login-button" autologoutlink="true" id="fblogin" scope="email,read_stream,manage_pages,user_checkins"></div>-->

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '177639729007660', // App ID
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      oauth      : true, // enable OAuth 2.0
      xfbml      : true  // parse XFBML
    });

		FB.getLoginStatus(function(response) {
		  if (response.authResponse) {
		    // logged in and connected user, someone you know
			FB.api('/me', function(response) {
			  alert("Welcome, " + response.name+"     "+response.username+"    "+response.id+"    "+response.email+"     "+response.gender+"    "+response.locale+"   "+response.first_name+"    "+response.last_name);
			
			});
		  } else {
		    //no user session available, someone you dont know
			alert("logged out");
		  }
		});
		FB.Event.subscribe('auth.authResponseChange', function(response) {
			alert('The status of the session is: ' + response.status);	
			//window.location.reload();		
		});
//		FB.Event.subscribe('auth.login', authCallback(response));
//		FB.Event.subscribe('auth.logout', authCallback(response));

  }; // fbAsyncInit

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     d.getElementsByTagName('head')[0].appendChild(js);
   }(document));
   //window.location.reload();
</script>

<!--<div class="fb-login-button" autologoutlink="true" id="fblogin" scope="email,read_stream,manage_pages,user_checkins"></div>
-->

<a href="#" onclick="window.open('https://www.facebook.com/dialog/oauth?client_id=144309135637709&redirect_uri=http%3A%2F%2Fwww.free-ebooks.net%2Futils%2Ffb_login.php&scope=email&display=popup','FacebookLogin','width=600,height=300,menubar=no,scrollbars=no,status=yes,toolbar=no,resizable=no');return false;">Login with facebook</a>