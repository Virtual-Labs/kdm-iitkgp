<?php
echo "hhhh";
//include('facebook.php');
include('http://vls1.iitkgp.ernet.in/vls_web/oauth/facebook.php');
$code="";
$code = @$_REQUEST['code'];
//echo $code."nnn";

if(!$code){
     $client_id    = '177639729007660';
     $display      = 'page';
     $scope 	    = 'manage_pages, offline_access, read_insights, publish_stream, user_about_me, user_likes, email'; //or any other permissions you want
/******
MAKE SURE &type=web_server or it will put it after a hash (#) and you will not be able to get the value back out!
*******/
     $redirect_url = 'http://vls1.iitkgp.ernet.in/vls_web/facebook/oauth/step2.php';
     $oauth_url    = 'https://graph.facebook.com/oauth/authorize?client_id=' . $client_id . '&redirect_uri=' . $redirect_url . '&type=web_server&display=' . $display . '&scope=' . $scope;

		//echo $oauth_url;
		// die;

		 $config = array(
			 'appId'  => $app_id,
			 'secret' => $app_secret,
			 'cookie' => true,
			 'domain' => true
		 );
echo "mmmm";
		 $facebook_client = new Facebook($config);
		 echo "mmmm";
		 $session         = $facebook_client->getSession();
		 header('Location :'.$oauth_url);

}
?>
