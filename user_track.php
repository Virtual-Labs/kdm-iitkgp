<?php
    session_start();
    /*echo "<pre>";
    print_r($_SESSION);
    echo "</ppr>";*/

    $page_url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
   //echo $url;
    /*echo "<pre>";
    print_r($_SERVER);
    echo "</ppr>";*/
    
    $_SESSION['current_page_url'] = $page_url;
    if($_SESSION['tmp_page_url'] != $_SESSION['current_page_url'])
    {
       $_SESSION['tmp_page_url'] = $page_url;
       $_SESSION['current_page_url'];
       //echo "<br>";
       $referrer = $_SERVER[HTTP_REFERER];
       //echo "<br>";
       $user_agent = $_SERVER[HTTP_USER_AGENT];
       $obj = new dataInsertQuery();
       $obj->user_track($_SESSION['current_page_url'],$referrer);
    }
    else
    {
      //do nothing
    }





?>
