<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dashboard - Admin Panel VLS1</title>
</head>

<body>

<div class="adminpanel">
<div id="dashboardleftpanels">
<?php
include("panels/leftpanel.php");
?>
</div>
<div id="dashboardtoppanels">
<?php
include("panels/toppanel.php");
?>
</div>
<div id="dashboardbodypanels">
</div>

<div id="dashboardseperator">
</div>

<div id="dashboardrightpanels">
</div>

</div><!--End of adminpanel class -->

</body>
</html>
