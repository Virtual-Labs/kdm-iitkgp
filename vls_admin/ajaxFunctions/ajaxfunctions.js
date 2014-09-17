// JavaScript Document

function ajaxAdminLoginCheck(username,password,type)
{
  if(username == "")
  {
	  document.getElementById("msg").innerHTML = "";
	  return;
  }
  if(window.XMLHttpRequest)
	  xmlhttp = new XMLHttpRequest();
  else
	  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  
  xmlhttp.onreadystatechange = function()
  {
	  if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	  {
		  if(xmlhttp.responseText.indexOf("Success") != -1)
		       window.location = "dashboard/dashboard.php"; 
		  else
		       document.getElementById("msg").innerHTML = xmlhttp.responseText;
	  }
  }
  xmlhttp.open("GET","database/dataFetchQuery.php?referral=ajxAdminLoginCheck&username="+username+"&password="+password+"&type="+type);
  xmlhttp.send();
}




function ajaxShowSpecificTabs(expId)
{
//alert(expId);
  if(expId == "")
  {
	  document.getElementById("tabList").innerHTML = "";
	  return;
  }
  var folderPath =  "Folder path ::  http://www.vls1.iitkgp.ernet.in/vls_web/experiments/expfolder_"+expId+"/";
  document.getElementById('folderPath').innerHTML = folderPath;
  if(window.XMLHttpRequest)
	  xmlhttp = new XMLHttpRequest();
  else
	  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  
  xmlhttp.onreadystatechange = function()
  {
	  if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	  {
		       document.getElementById("tabList").innerHTML = xmlhttp.responseText;
	  }
  }

  xmlhttp.open("GET","../database/dataFetchQuery.php?referral=showSpecificTabs&expId="+expId);
  xmlhttp.send();
  //return true;
}




function ajaxGetTabContent(expId,tabIdTabName)
{
  //alert(expId+"  hhhh "+tabIdTabName);
  //exit;
  if(expId == "")
  {
	  CKEDITOR.instances.editorContent.setData("");
	  return;
  }
  var temp = new Array();
  temp = tabIdTabName.split("_");
 /* if(temp[1] == 'Simulator')
      document.getElementById('uploadFile').disabled = false;
  else
      document.getElementById('uploadFile').disabled = true;*/
  if(window.XMLHttpRequest)
	  xmlhttp = new XMLHttpRequest();
  else
	  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  
  xmlhttp.onreadystatechange = function()
  {
	  if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	  {
			  CKEDITOR.instances.editorContent.setData(xmlhttp.responseText);
	  }
  }
  
  //alert(expId+"     "+temp[0]+"     "+temp[1]);
  
  xmlhttp.open("GET","../database/dataFetchQuery.php?referral=getTabContent&expId="+expId+"&tabId="+temp[0]+"&tabTitle="+temp[1]);
  xmlhttp.send();

}




function ajaxShowSpecificFolderContents(expId)
{
 //alert(expId);
  if(expId == "")
  {
	  document.getElementById("ooo").innerHTML = "";
	  return;
  }
  if(window.XMLHttpRequest)
	  xmlhttp = new XMLHttpRequest();
  else
	  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  
  xmlhttp.onreadystatechange = function()
  {
	  if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	  {
		       document.getElementById("ooo").innerHTML = xmlhttp.responseText;
	  }
  }

  xmlhttp.open("GET","../phpFunctions/functions.php?referral=ajxShowSpecificFolderContents&expId="+expId);
  xmlhttp.send();
}




function ajaxChangeTabStatus(expId,tabId)
{
  if(expId == "")
  {
	  document.getElementById("xxx").innerHTML = "";
	  return;
  }
  if(window.XMLHttpRequest)
	  xmlhttp = new XMLHttpRequest();
  else
	  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  
  xmlhttp.onreadystatechange = function()
  {
	  if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	  {
		       document.getElementById("xxx").innerHTML = xmlhttp.responseText;
			   //document.getElementById("tabStatus").innerHTML = xmlhttp.responseText;
	  }
  }

  xmlhttp.open("GET","../database/dataFetchQuery.php?referral=ajxChangeTabStatus&expId="+expId+"&tabId="+tabId);
  xmlhttp.send();
}