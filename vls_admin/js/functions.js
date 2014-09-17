// JavaScript Document
function createEditTab(action,tab_id)
{
	var createTitle = document.getElementById('createTitle').value;
	var createContent = CKEDITOR.instances.editorContent.getData();
	
	window.location = "../database/dataInsertQuery.php?referral=tab&action="+action+"&createTitle="+createTitle+"&createContent="+createContent+"&mt="+tab_id;  
	return false;
}


function createEditExperiments(action,expId)
{	
  var createTitle = document.getElementById('createTitle').value;
  alert(createTitle);
  var createContent  = CKEDITOR.instances.editorContent.getData();
  //alert(document.getElementById('editorContent').value);
  var elem = document.getElementById('createExperiment').elements;
  var tabIds = "";
  for(i=0; i<elem.length; i++)
  {
	if((elem[i].type == "checkbox") && (elem[i].checked))
		tabIds += elem[i].value + ",";
  }
  tabIds = tabIds.substring(0, tabIds.length-1);

  if(tabIds == "")
     return true;
  alert("../database/dataInsertQuery.php?referral=experiment&action="+action+"&createTitle="+createTitle+"&createContent="+createContent+"&tabIds="+tabIds+"&mt="+expId);
  //exit;
  window.location = "../database/dataInsertQuery.php?referral=experiment&action="+action+"&createTitle="+createTitle+"&createContent="+createContent+"&tabIds="+tabIds+"&mt="+expId;
  return false;
}



function selectedTabs(checked)
{
	var arr = new Array();
	arr=checked.split("a");
	for(j=0; j<arr.length; j++)
	  document.getElementById(arr[j]).checked = true;
}


/*function addTabContent()
{
	var expId = document.getElementById('selectExperimentList').value;
	var tabId = document.getElementById('selectTabList').value;
	var createContent = CKEDITOR.instances.editorContent.getData();
	window.location = "../database/dataInsertQuery.php?referral=addTabContent&expId="+expId+"&tabId="+tabId+"&createContent="+createContent;
}*/


function checkExt()
{
	var filename = document.getElementById('uploadTabPic').value;
	var filelength = parseInt(filename.length)-3;
	var fileext = filename.substring(filelength,filelength + 3);
	if(fileext.toLowerCase() != "gif" && fileext.toLowerCase() != "jpg" && fileext.toLowerCase() != "png")
	{
		alert("You can only upload png or gif or jpg images.");
		return false;
	}
	else
	   return true;
}



function changeUserType(whichButton)
{
    if(whichButton == "userTypeUp")
	{
	var elem = document.getElementById('showUserList').elements;
	var selected_index = document.showUserList.userTypeUp.selectedIndex;
	if(selected_index == 0)
	{
		alert('Please select an user role.');
	    return false;
	}
	var action = document.getElementById('userTypeUp').options[selected_index].value;
	var uids = "";
	}
	else
	{
	var elem = document.getElementById('showUserList').elements;
	var selected_index = document.showUserList.userTypeDown.selectedIndex;
	if(selected_index == 0)
	{
		alert('Please select an user role.');
	    return false;
	}

	var action = document.getElementById('userTypeDown').options[selected_index].value;
	var uids = "";
	}
	for(i=0; i<elem.length; i++)
	{
		if((elem[i].type == "checkbox") && (elem[i].checked))
			uids += elem[i].value+',';
	}
	uids = uids.substring(0, uids.length-1);
	if(uids == "")
	{
		alert('Please select user(s).');
	    return false;
	}

	window.location = "../database/dataInsertQuery.php?referral=changeUserType&changeTo="+action+"&userIds="+uids;
}

function changeUserStatus(whichButton)
{
    if(whichButton == "userStatusUp")
	{
	var elem = document.getElementById('showUserList').elements;
	var selected_index = document.showUserList.userStatusUp.selectedIndex;
	if(selected_index == 0)
	{
		alert('Please select an action type.');
	    return false;
	}
	var action = document.getElementById('userStatusUp').options[selected_index].value;
	var uids = "";
	}
	else
	{
	var elem = document.getElementById('showUserList').elements;
	var selected_index = document.showUserList.userStatusDown.selectedIndex;
	if(selected_index == 0)
	{
		alert('Please select an action type.');
	    return false;
	}

	var action = document.getElementById('userStatusDown').options[selected_index].value;
	var uids = "";
	}
	for(i=0; i<elem.length; i++)
	{
		if((elem[i].type == "checkbox") && (elem[i].checked))
			uids += elem[i].value+',';
	}
	uids = uids.substring(0, uids.length-1);
	if(uids == "")
	{
		alert('Please select user(s).');
	    return false;
	}
	window.location = "../database/dataInsertQuery.php?referral=changeUserStatus&changeTo="+action+"&userIds="+uids;
}




function changeTabStatus(whichButton)
{
    if(whichButton == "tabStatusUp")
	{
	var elem = document.getElementById('showTabList').elements;
	var selected_index = document.showTabList.tabStatusUp.selectedIndex;
	if(selected_index == 0)
	{
		alert('Please select an action type.');
	    return false;
	}
	var action = document.getElementById('tabStatusUp').options[selected_index].value;
	var tabids = "";
	}
	else
	{
	var elem = document.getElementById('showTabList').elements;
	var selected_index = document.showTabList.tabStatusDown.selectedIndex;
	if(selected_index == 0)
	{
		alert('Please select an action type.');
	    return false;
	}
	var action = document.getElementById('tabStatusDown').options[selected_index].value;
	var tabids = "";
	}
	for(i=0; i<elem.length; i++)
	{
		if((elem[i].type =="checkbox") && (elem[i].checked))
			tabids += elem[i].value+',';
	}
	tabids = tabids.substring(0, tabids.length-1);
	if(tabids == "")
	{
		alert('Please select tab(s).');
	    return false;
	}
	window.location = "../database/dataInsertQuery.php?referral=changeTabStatus&changeTo="+action+"&tabIds="+tabids;
}





function changeCategoryStatus(whichButton)
{
    if(whichButton == "categoryStatusUp")
	{
	var elem = document.getElementById('showCategoryList').elements;
	var selected_index = document.showCategoryList.categoryStatusUp.selectedIndex;
	if(selected_index == 0)
	{
		alert('Please select an action type.');
	    return false;
	}
	var action = document.getElementById('categoryStatusUp').options[selected_index].value;
	var catIds = "";
	}
	else
	{
	var elem = document.getElementById('showCategoryList').elements;
	var selected_index = document.showCategoryList.categoryStatusDown.selectedIndex;
	if(selected_index == 0)
	{
		alert('Please select an action type.');
	    return false;
	}
	var action = document.getElementById('categoryStatusDown').options[selected_index].value;
	var catIds = "";
	}
	
	
	for(i=0; i<elem.length; i++)
	{
		if((elem[i].type =="checkbox") && (elem[i].checked))
			catIds += elem[i].value+',';
	}
	catIds = catIds.substring(0, catIds.length-1);
	if(catIds == "")
	{
		alert('Please select category(s).');
	    return false;
	}
	window.location = "../database/dataInsertQuery.php?referral=changeCategoryStatus&changeTo="+action+"&catIds="+catIds;
}






function changeExpStatus(whichButton)
{
	//alert(whichButton);
	//exit;
    if(whichButton == "expStatusUp")
	{
	var elem = document.getElementById('showExpList').elements;
	var selected_index = document.showExpList.expStatusUp.selectedIndex;
    	if(selected_index == 0)
	   {
		 alert('Please select an action type.');
	     return false;
	   }
	var action = document.getElementById('expStatusUp').options[selected_index].value;
	var expids = "";
	}
	else
	{
	    var elem = document.getElementById('showExpList').elements;
	    var selected_index = document.showExpList.expStatusDown.selectedIndex;
	    if(selected_index == 0)
	     {
		    alert('Please select an action type.');
	         return false;
	     }
	var action = document.getElementById('expStatusDown').options[selected_index].value;
	var expids = "";
	}
	for(i=0; i<elem.length; i++)
	{
		if((elem[i].type == "checkbox") && (elem[i].checked))
			expids += elem[i].value+',';
	}
	expids = expids.substring(0, expids.length-1);
	//alert(expids);
		
	if(expids == "")
	{
		alert('Please select experiment(s).');
	    return false;
}
	window.location = "../database/dataInsertQuery.php?referral=changeExpStatus&changeTo="+action+"&expIds="+expids;
}




function setTabIndex()
{
	var totalTab = document.getElementById('totalTab').value;
	//alert(totalTab);
	var i = 0;
	var tabTitles = "";
	var tabIndexs = "";
	//showTabList
	var elem = document.getElementById('showTabList').elements;
	for(i=0; i<elem.length; i++)
	 {
		 if(elem[i].type == "text")
		 {
			 tabTitles += elem[i].id+",";
			 tabIndexs += elem[i].value+",";
		 }
		   //alert(elem[i].name);
	 }
	tabTitles = tabTitles.substring(0, tabTitles.length-1);
	tabIndexs = tabIndexs.substring(0, tabIndexs.length-1);
	window.location = "../database/dataInsertQuery.php?referral=setTabIndex&tabTitles="+tabTitles+"&tabIndexs="+tabIndexs+"&totalTab="+totalTab;
}





