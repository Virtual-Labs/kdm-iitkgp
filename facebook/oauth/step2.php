<?php
$code=$_REQUEST['code'];
 $redirect_url = 'http://vls1.iitkgp.ernet.in/vls_web/facebook/oauth/step2.php';
/********
! make sure below to put your appsecret and app id in or it will not work!
*********/

$link="https://graph.facebook.com/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_url&client_secret=$app_secret&code=$code";

$string=file_get_contents($link);
$auth_token=substr($string, 13, 150);
echo "Your Facebook OAuth token for this user is $auth_token";

?>