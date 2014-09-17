<?php session_start(); ?>
<?php include('database_connect.php'); ?>


<?php
if(isset($_GET['referral']) && $_GET['referral'] != "")
{
 //echo $_GET['referral'];
 //exit();
  $obj = new dataFetchQuery();
  $obj->$_GET['referral']();
}
?>

<?php
class dataFetchQuery
{

/*$con_link = "";
function _construct()
{
  $con_link = $con;
}*/
  
public function showExperimentTitles()
{
   //include('database_connect.php');
   $query = "SELECT * FROM `experiments` WHERE `status`='published' ";
   //exit();
   $runQuery = mysqli_query($GLOBALS[con], $query);
   while($row = mysqli_fetch_array($runQuery))
   {
      $tit = $row['title'];
      if((strlen($row['title'])) <= 41)
	     $title = $row['title'];
	  else
	     $title = substr($row['title'],0,37)."...";
		 
      echo "<div class='experimentTitleDiv'>";
      echo "<div id='experimentLogo'></div>";
	  echo "<div id='expTitleDescp'>";
	  echo "<div id='expTitle'><a href='experiments/experiment.php?expId=".$row['exp_id']."' title='$tit' alt='$tit'>".$tit."</a></div>";
	  echo "<div id='expDescp'>".substr(strip_tags($row['description']),0,60)."...</div>";
	  echo "</div>";
      echo "</div>";
	  
   }
}


public function fetchExperimentData($expId)
{
   $query = "SELECT * FROM `experiments` WHERE `exp_id`='".$expId."'";
   $runQuery = mysqli_query($GLOBALS[con], $query);
   $expQuery = mysqli_fetch_array($runQuery);
   echo "<div id='experimentTitle'><div id='experimentTitleText'>".$expQuery['title']."</div></div>";
   
   $tabIds = "";
   $query = "SELECT * FROM `tabcontents` WHERE `exp_id`='".$expId."' AND `status`='published'";
   $runQuery = mysqli_query($GLOBALS[con], $query);
   if(mysqli_num_rows($runQuery) > 0)
   {
   while($expQuery = mysqli_fetch_array($runQuery))
     $tabIds .= $expQuery['tab_id'].",";
   $tabIds = substr($tabIds,0,-1);
   ///exit();
   $query = "SELECT * FROM `tabs` WHERE `tab_id` IN(".$tabIds.") ORDER BY `index`";
   //exit();
   $runQuery = mysqli_query($GLOBALS[con],$query);
   $tabArray = array();
   $i = 0;
   while($tabQuery = mysqli_fetch_array($runQuery))
   {
	 $tabArray[$i] = $tabQuery;
	 $i++;
   }
   /*echo "<pre>";
   print_r($tabArray[2]);
   echo "</pre>";
   exit();*/
   $tabTitle = "";
   $query = "SELECT * FROM `tabcontents` WHERE `exp_id`='".$expId."' AND `status`='published'";
   $runQuery = mysqli_query($GLOBALS[con],$query);
   $j = 0;
   $initTabId = 0;
   echo "<div style='width:100%;margin:0 auto 0 auto;'>";
   echo "<div id='tabMenu'>";
   //echo "<div style='height:69px; width:100%; background-image:url(../images/experimentCanvasTopBg.jpg); background-repeat:no-repeat;'>";
   while($tabContentQuery= mysqli_fetch_array($runQuery))
   {
      $tab = $tabArray[$j]['tab_id'];
	  $tabTitle = $tabArray[$j]['title'];

	  if($j==0)
	    $initTabId = $tab."_".$tabTitle;
	  
      echo "<a href='#' onclick='ajaxFetchExperimentData($expId,$tab);'><div id='eachTab'><div id='eachTabIcon'><img src='".$tabArray[$j]['image']."' border='0' > </div><div id='eachTabTitle'>".$tabTitle."</div></div></a>";
	  $j++;
   }
   echo "<div style='clear:both;'></div>";
   echo "</div>";
   echo "</div>";
   //echo "</div>";
   
   //$this->getFirstTabContent();
   
   return $initTabId;
   }
   else
      return "";
}





public function fetchExpList($cid)
{
  $sql = "select * from `experiments` where status='published' and cat_ids in (".$cid.") ";
  $res = mysqli_query($GLOBALS[con],$sql);
  if(mysqli_num_rows($res) > 0)
  {
    $i = 0;
    while($row = mysqli_fetch_array($res))
	{
	  $rows[$i] = $row;
	  $i++;
	}
	return $rows;
  }
  else
  {
    return null;
  }
}
   
  
 
public function ajxFetchExperimentData()
{
  $expId    = $_GET['expId'];
  $tabId     = $_GET['tabId'];
  $query = "SELECT * FROM `tabs` WHERE `tab_id`='".$tabId."'  ";
  $runQuery = mysqli_query($GLOBALS[con],$query);
  $row = mysqli_fetch_array($runQuery);
  echo "<div id='TabHeader' >".$row['title']."</div>";
  if($row['title'] == "Feedback")
    { 
	  $query = "SELECT * FROM `feedbackFormContents` ";
	  $runQuery = mysqli_query($GLOBALS[con],$query);
	  $row = mysqli_fetch_array($runQuery);
	  //echo $_SESSION['f_name'];
	  echo $row['content'];
	  //eval($row['content']);

	}
  else
    {
	  $query = "SELECT * FROM `tabcontents` WHERE `exp_id`='".$expId."' AND `tab_id`='".$tabId."' AND `status`='published' ";
	  $runQuery = mysqli_query($GLOBALS[con],$query);
	  $row = mysqli_fetch_array($runQuery);
	  echo $row['content'];
	}
} 




public function getFirstTabContent($expId,$initTabId)
{
  $query = "SELECT * FROM `tabcontents` WHERE `exp_id`='".$expId."' AND `tab_id`='".$initTabId."'";
  $runQuery = mysqli_query($GLOBALS[con],$query);
  $resQuery = mysqli_fetch_array($runQuery);
  echo $resQuery['content'];
}



public function ajxUserLoginCheck()
{
  $username = $_GET['usrnam'];
  $password = $_GET['passwd'];
  $query = "SELECT * FROM `user` WHERE `email`='".$username."' AND `password`='".$password."'";
  $result = mysqli_query($GLOBALS[con],$query);
  if(mysqli_num_rows($result) > 0)
  {
    	$row = mysqli_fetch_array($result);

	  $_SESSION['uid'] = $row['uid'];
	  $_SESSION['f_name'] = $row['f_name'];
	  $_SESSION['l_name'] = $row['l_name'];
	  $_SESSION['email'] = $row['email'];
	  $_SESSION['user_type'] = $row['user_type'];


	  $makeProfFolderPath = "../users/".$row['profession'];
          $makeUserFolderPath = $makeProfFolderPath."/".$_SESSION['f_name']."_".$_SESSION['l_name']."_".$_SESSION['uid']; 

	   //First check the profession folder is exists or not, if not then create one, eg. student or Academician
	   if(file_exists($makeProfFolderPath) && is_dir($makeProfFolderPath))
	   {
	     mkdir($makeUserFolderPath, 0777);   @chmod($makeUserFolderPath, 0777);
	   }
	   else
	   {
	     mkdir($makeProfFolderPath, 0777);   @chmod($makeProfFolderPath, 0777);
	     mkdir($makeUserFolderPath, 0777);   @chmod($makeUserFolderPath, 0777);
	   }

        $uid       = $_SESSION['uid'];
   	$referer   = $_GET['referre'];
   	$date = date("Y-m-d");
   	$time = date("H:i:s");  
   	$activities  = $referer." -- ".$time;
        $activities .= " | Login at -- ".$time;

        $query = "select * from `user_log` where `uid`='".$_SESSION['uid']."' and `date`='".date("Y-m-d")."' ";
        $res   = mysqli_query($GLOBALS[con],$query);
        if(mysqli_num_rows($res) > 0)
        {
          $row = mysqli_fetch_array($res);
          $query = "update `user_log` set
             `activities` ='".$row['activities']." | ".$activities."' where `uid`='".$_SESSION['uid']."' and `date`='".date("Y-m-d")."' ";
        }
        
        else
        {
   	$query = "insert into `user_log` set
	         `uid` ='".$uid."', 
	         `activities` ='".$activities."', 
	         `date` ='".$date."'";
        }
        mysqli_query($GLOBALS[con],$query);
        echo "Success";
  }
  else
    echo "Invalid Email or Password!";
}





public function getCategoryList()
{
   $sql = "select * from `categories` where `status`='Published' ";
   $res = mysqli_query($GLOBALS[con],$sql);
   if(mysqli_num_rows($res) > 0)
   {
     $rows = array();
     $i=0;
     while($row = mysqli_fetch_array($res))
	 {
	   $rows[$i] = $row;
	   $i++;
	 }
	 return $rows;
   }
   else
   {
     return null;
   }
}


public function ajaxCheckMailExists()
{
  $email = $_GET['email'];
  $sql = "select * from `user` where `email` = '".$email."' ";
  $res = mysqli_query($GLOBALS[con],$sql);
  if(mysqli_fetch_array($res) > 0)
    echo "Email ID already exists!";
  else
    echo "";
}
   
  
  
}
 
?>
