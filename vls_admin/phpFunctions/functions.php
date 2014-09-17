<?php
if(isset($_GET['referral']) && $_GET['referral'] != "")
{
    $obj = new  phpFunctions();
	$obj->$_GET['referral']();
}
?>
<?php
class phpFunctions
{

public function ajxShowSpecificFolderContents()
{
    echo $_GET['expId'];
}



}
?>