<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
define('YOUR_APP_ID', '177639729007660');

//uses the PHP SDK.  Download from https://github.com/facebook/php-sdk
require 'facebook.php';

$facebook = new Facebook(array(
  'appId'  => YOUR_APP_ID,
  'secret' => '74a990aa2b19b4e28bc55eae31b6995f',
));

$userId = $facebook->getUser();

?>

<html>
  <body>
    <?php if ($userId) { 
      $userInfo = $facebook->api('/' + $userId); ?>
      Welcome <?= $userInfo['name'] ?>
    <?php } else { ?>
    <div id="fb-root"></div>
    <fb:login-button></fb:login-button>
    <?php } ?>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '<?= YOUR_APP_ID ?>',
          status     : true, 
          cookie     : true,
          xfbml      : true,
          oauth      : true,
        });

        FB.Event.subscribe('auth.login', function(response) {
          window.location.reload();
        });
      };

      (function(d){
         var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
         js = d.createElement('script'); js.id = id; js.async = true;
         js.src = "//connect.facebook.net/en_US/all.js";
         d.getElementsByTagName('head')[0].appendChild(js);
       }(document));
    </script>
  </body>
</html>