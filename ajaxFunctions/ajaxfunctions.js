// JavaScript Document

function ajaxFetchExperimentData(expId,tabId)
{
  
  if(expId == "")
  {
	  document.getElementById("experimentCanvasSubDiv").innerHTML = "";
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
		       document.getElementById("experimentCanvasSubDiv").innerHTML = xmlhttp.responseText;
			    if(document.getElementById('sess').value !="")
				{
			      document.getElementById('withoutSession').style.display='none';
				}
	  }
  }
  xmlhttp.open("GET","../database/dataFetchQuery.php?referral=ajxFetchExperimentData&expId="+expId+"&tabId="+tabId,true);
  xmlhttp.send();

}



function ajaxUserLoginCheck(usrnam,passwd,referer)
{
	///alert(usrnam+"      "+passwd+"      "+referer);
  if(usrnam == "" || passwd == "")
  {
	  document.getElementById("loginMsg").innerHTML = "Plsase enter your email and password!";
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
                  {  
                    if(referer == "http://vls1.iitkgp.ernet.in/vls_web/registration.php?msg=success" || referer == "http://vls1.iitkgp.ernet.in/vls_web/registration.php")
                     location.href = "http://vls1.iitkgp.ernet.in/vls_web/";
		    else
                    location.href = referer; 
                  }
		  else
		       document.getElementById("loginMsg").innerHTML = xmlhttp.responseText;
	  }
  }

  xmlhttp.open("GET","database/dataFetchQuery.php?referral=ajxUserLoginCheck&usrnam="+usrnam+"&passwd="+passwd+"&referre="+referer,true);
  xmlhttp.send();
}







function ajaxSendFeedback()
{
  var feedBackExpId   =  document.getElementById('feedBackExpId').value;
  //alert(feedBackExpId);
  var name                    = document.getElementById('name').value;
  var email                    = document.getElementById('email').value;
  var department         = document.getElementById('department').value;
  var i=0;
  var expPerformance = "";
  var interactionCtrl  = "";
  var simulatorCmpr ="";
  var dataMrmnt  = "";
  var manuals = "";
  var expObjectives = "";
  var expResult  = "";
  var understandExp = ""; /////////////////
  var confidence = "";
  var expMotivation = "";
  var stepmethdExp = ""; //////
  var actualLab  = "";
  var instructorAbs = "";
  var withoutInt = "";
  var analyzeData = "";
  var stepmethdBeforeRun = "";
  var compareRes = "";
  var performExp = "";
  var moreScope = "";

  
   for(i=1; i<=5; i++)
  {
	    var id = "expPerformance"+i;
		 if(document.getElementById(id).checked)
		{
			expPerformance = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=5; i++)
  {
	    var id = "interactionCtrl"+i;
		 if(document.getElementById(id).checked)
		{
			interactionCtrl = document.getElementById(id).value;
			break;
		}
  }



  for(i=1; i<=5; i++)
  {
	    var id = "simulatorCmpr"+i;
		 if(document.getElementById(id).checked)
		{
			simulatorCmpr = document.getElementById(id).value;
			break;
		}
  }
  
  

  for(i=1; i<=5; i++)
  {
	    var id = "dataMrmnt"+i;
		 if(document.getElementById(id).checked)
		{
			dataMrmnt = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=5; i++)
  {
	    var id = "manuals"+i;
		 if(document.getElementById(id).checked)
		{
			manuals = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=5; i++)
  {
	    var id = "expObjectives"+i;
		 if(document.getElementById(id).checked)
		{
			expObjectives = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=5; i++)
  {
	    var id = "expResult"+i;
		 if(document.getElementById(id).checked)
		{
			expResult = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=5; i++)
  {
	    var id = "understandExp"+i;
		 if(document.getElementById(id).checked)
		{
			understandExp = document.getElementById(id).value;
			break;
		}
  }

  
    for(i=1; i<=3; i++)
  {
	    var id = "confidence"+i;
		 if(document.getElementById(id).checked)
		{
			confidence = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=3; i++)
  {
	    var id = "expMotivation"+i;
		 if(document.getElementById(id).checked)
		{
			expMotivation = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=2; i++)
  {
	    var id = "stepmethdExp"+i;
		 if(document.getElementById(id).checked)
		{
			stepmethdExp = document.getElementById(id).value;
			break;
		}
  }
  

  for(i=1; i<=2; i++)
  {
	    var id = "actualLab"+i;
		 if(document.getElementById(id).checked)
		{
			actualLab = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=2; i++)
  {
	    var id = "instructorAbs"+i;
		 if(document.getElementById(id).checked)
		{
			instructorAbs = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=2; i++)
  {
	    var id = "withoutInt"+i;
		 if(document.getElementById(id).checked)
		{
			withoutInt = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=2; i++)
  {
	    var id = "analyzeData"+i;
		 if(document.getElementById(id).checked)
		{
			analyzeData = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=2; i++)
  {
	    var id = "stepmethdBeforeRun"+i;
		 if(document.getElementById(id).checked)
		{
			stepmethdBeforeRun = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=2; i++)
  {
	    var id = "compareRes"+i;
		 if(document.getElementById(id).checked)
		{
			compareRes = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=2; i++)
  {
	    var id = "performExp"+i;
		 if(document.getElementById(id).checked)
		{
			performExp = document.getElementById(id).value;
			break;
		}
  }


  for(i=1; i<=2; i++)
  {
	    var id = "moreScope"+i;
		 if(document.getElementById(id).checked)
		{
			moreScope = document.getElementById(id).value;
			break;
		}
  }

  
  var sysHelp              = document.getElementById('sysHelp').value;
  var sysPblm             = document.getElementById('sysPblm').value;
  var tellUs                  = document.getElementById('tellUs').value;  
  var threePblms         = document.getElementById('threePblms').value;
  var threeThings        = document.getElementById('threeThings').value;
  
  var parameters = "referral=ajxFeedbackSave&expId="+feedBackExpId+"&name="+name+"&email="+email+"&department="+department+"&expPerformance="+expPerformance+"&interactionCtrl="+interactionCtrl+"&simulatorCmpr="+simulatorCmpr;
  parameters += "&dataMrmnt="+dataMrmnt+"&manuals="+manuals+"&expObjectives="+expObjectives+"&expResult="+expResult+"&understandExp="+understandExp+"&sysHelp="+sysHelp+"&sysPblm="+sysPblm;
  parameters += "&tellUs="+tellUs+"&confidence="+confidence+"&expMotivation="+expMotivation+"&stepmethdExp="+stepmethdExp+"&actualLab="+actualLab+"&instructorAbs="+instructorAbs+"&withoutInt="+withoutInt;
  parameters += "&analyzeData="+analyzeData+"&stepmethdBeforeRun="+stepmethdBeforeRun+"&compareRes="+compareRes+"&performExp="+performExp+"&threePblms="+threePblms+"&threeThings="+threeThings;
  parameters += "&moreScope="+moreScope;
  
  //alert(parameters);
  
  //document.getElementById("feedbackMsg").innerHTML = "";
 /* if(name == "")
  {
	  document.getElementById("feedbackMsg").innerHTML = "Please insert something";
	  return;
  }*/
  if(window.XMLHttpRequest)
	  xmlhttp = new XMLHttpRequest();
  else
	  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  
  xmlhttp.onreadystatechange = function()
  {
	  if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	  {
		       document.getElementById("feedbackMsg").innerHTML = xmlhttp.responseText;
	  }
  }
  xmlhttp.open("GET","../database/dataInsertQuery.php?"+parameters,true);
  xmlhttp.send();

}



function ajaxCheckMailExists(email)
{
 
  if(window.XMLHttpRequest)
	  xmlhttp = new XMLHttpRequest();
  else
	  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  
  xmlhttp.onreadystatechange = function()
  {
	  if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	  {
            document.getElementById("mailExists").innerHTML = xmlhttp.responseText;

            if(xmlhttp.responseText.indexOf("Email ID already exists!") != -1)
               document.getElementById('register').disabled = true; 
            else
               document.getElementById('register').disabled = false; 
	  }
  }
  xmlhttp.open("GET","database/dataFetchQuery.php?referral=ajaxCheckMailExists&email="+email,true);
  xmlhttp.send();

}
