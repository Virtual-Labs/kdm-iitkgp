<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="#" method="post" name="formCheck" id="formCheck">
<?php 
for($i=0; $i<5; $i++)
{?>
 
<input type="checkbox" name="xx" id="<?php echo $i; ?>" value="<?php echo $i; ?>"  />

<?php 
}
?>

<input type="submit" value="Check All" onclick="javascript: checkAll(); return false;" />
<input type="submit" value="Uncheck All" onclick="javascript: uncheckAll();" />
</form>

</body>
</html>

<script type="text/javascript">
function checkAll(list)
{
  var elemen = document.getElementById('formCheck').elements;
  //alert(elemen.length);
  for(i=0; i<elemen.length; i++)
  {
     if((elemen[i].type == "checkbox") && (elemen[i].checked))
	 {
	    //alert("checked");
	 }
  }
  return false;
}

function uncheckAll()
{
   var ele = document.getElementById('formCheck').elements;
   alert(ele.length);
   for(i=0; i<ele.length; i++)
   {
     if((ele[i].type == "checkbox") && (ele[i].checked))
	    ele[i].checke = false;
   }
}
</script>
