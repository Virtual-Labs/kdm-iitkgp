<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mechanical Engineering Department(IIT KGP)</title>

<meta name='robots' content='noindex,nofollow' />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#scrollbar1').tinyscrollbar();	
	});
</script>

<script src="http://www.java.com/js/deployJava.js"></script>
<script src="./js/deployJava.js"></script>
<script src="./js/ins.js"></script> 
<link rel="stylesheet" href="css/ins.css"/>	
</head>

<body>
<div class="wrapper" style="">

   <div class="wrapper-header">
     <?php include("../header.php"); ?>
    </div> <!-- End of Wrapper class -->
	
	<div class="wrapper-content">


       <div id="divMain">
        <h1 style="text-align:center;background-color: sandybrown">JAVA 3D & JRE INSTALLATION PROCEDURES</h1>
         <div id="insDiv">
            
            
            <h1>Your System Information:</h1>
            <hr/>
            <script type="text/javascript">
                var jreVersionsArr = deployJava.getJREs();
                document.write("<br>Platform(OS):  "+platformName);
                document.write("<br>JRE versions:  " + jreVersionsArr);
                if(javaEnabled == 'true')
                document.write("<br>Java enabled browser :  Yes");  
                else
                {   
                document.write("<br>Java enabled browser :  No"); 
                
                document.write("<a href='http://java.com/en/download/help/enable_browser.xml' target='_blank' style='margin-left:20px;'>(How do I enable Java in my web browser?)</a>"); 
                }   
                document.write("<br>Application(browser) Code Name:  "+codeName);
                document.write("<br>Application(browser) Name:  "+appName);
                
                //orangered
                if (jreVersionsArr.length == 0) {  
                    document.write("<div style='background-color:red; border:1px solid red; width:970px; text-align:center;margin-top:20px;color: white;'>");
                    document.write("<b>JAVA Runtime Enviorment(JRE) is not installed in your Computer.</b>");
                    document.write("<br><a href='#' onclick=callJRE();>Click Here</a> to install JRE in your Computer");
                    document.write("</div>");
                }else{                   
                    //document.write("<br>Application(browser) Version:  "+appVersion);                
                    //document.write("<br>User Agent:  "+userAgent);                
                    //document.write("<br>Browser Version Major:  "+versionMajor);
                    //document.write("<br>Browser Version Minor:  "+versionMinor);
                    //document.write("<br>User Language:  "+language);                
                    //document.write("<br>Screen Width:  "+screenWidth);
                    //document.write("<br>Screen Height:  " + screenHeight);
                    document.write("<br><br>");
                    document.write("<h1>Procedure 1:</h1>");
                    var j3dURL=checkPlatForm();
                    document.write("<a href=\""+j3dURL+"\">Click Here</a> to download and install JAVA 3D.");
                    document.write("<br><br>&diams;Clear browser cache(optional) and restart web browser(Internet Explorer, Mozilla Firefox, Google Chrome,Opera, Apple Safari, etc.)");
                }
                function callJRE(){
                    deployJava.installLatestJRE(); 
                }
            </script>         

            <br /><br />
            <h1>Procedure 2:</h1>
            <hr/>
            <h2>Installer Applet to help you install JAVA 3D:</h2>
<br>
            <center>
            <APPLET
                CODEBASE="."
                ARCHIVE="archive/J3DTestAndInstalationJApplet.jar"
                CODE="j3dTestApplet.J3DTestJApplet.class"
                WIDTH="565" height="400"
                ALT="Your browser understands the applet tag but isn't displaying any applet.">
            </APPLET>
            </center>
            <br/>
            &diams;Clear browser cache(optional) and restart web browser(Internet Explorer, Mozilla Firefox, Google Chrome,Opera, Apple Safari, etc.).
            <br /><br />
            <h1>Procedure 3:(By Copying Library)</h1>
            <hr/>
            <h2>Steps for Windows7(64bit) and Windows8(64bit):</h2>
            <br/>
            <h3>Step 1:</h3>
            Know your <b style="color: blue" title="JAVA Runtime Environment">JRE</b> home directory.
            In Windows the default JRE Home directory path is: <b style="color: blue" title="JRE Home Directory">C:\Program Files (x86)\Java\jre7</b><br/><br/>
            <center><img src="images/j3d_directory_structure_win32_x86.png" /></center>
            <br/><br/>
            <h3>Step 2:</h3>
            Download JAVA 3D Library for Windows. <a href="j3d_jre/x86/windows/j3d-jre-1_5_2-windows-i586.zip">Click here</a>.
            <br/><br/>
            <h3>Step 3:</h3>

            Extract the zip file somewhere in your computer.<br/> 
            Copy JAVA 3D API files(j3dcore.jar, j3dutils.jar, vecmath.jar) within <b>C:\Program Files (x86)\Java\jre7\lib\ext</b> directory.<br/>
            Copy JAVA 3D Native API files(j3dcore-d3d.dll, j3dcore-ogl.dll, j3dcore-ogl-cg.dll, j3dcore-ogl-chk.dll) within <b>C:\Program Files (x86)\Java\jre7\bin</b></b> directory. 
            <br/><br/>
            <h3>Step 4:</h3>
            Clear browser cache(optional) and restart web browser(Internet Explorer, Mozilla Firefox, Google Chrome,Opera, Apple Safari, etc.).
            <br/><br/>
            <h2>Steps for Windows XP, Windows7(32bit) and Windows8(32bit):</h2>
            <br>
            <a href="j3d_jre/x86/windows/j3d-jre-1_5_2-windows-i586.zip">Click here</a> to download JAVA 3D Library. .
            <br>
            Default JRE Home directory path is: <b style="color: blue" title="JRE Home Directory">C:\Program Files\Java\jre7.</b> And rest of the procedures are same as Windows7(64bit) and Windows8(64bit)

            <br/><br/>
            <h2>Steps for MAC OS:</h2>
            Know your <b style="color: blue" title="JAVA Runtime Environment">JRE</b> home directory in Mac OS.
            Download JAVA 3D Library for MAC OS. <a href="http://java3d.java.net/binary-builds.html" target="_blank">Click here</a>.
            <br /><br />
            <!--<a href="http://java.com/en/download/help/enable_browser.xml" target="_blank">How do I enable Java in my web browser?</a>-->
            <!-- <a href="http://docs.oracle.com/javase/6/docs/technotes/guides/jweb/deployment_advice.html#deplToolkit">Java Rich Internet Applications Deployment Advice</a>   -->
  </div><!-- end of #insDiv -->
</div><!-------------------divMain-------------->
	 
	</div><!-- end of wrapper-content class -->
	
    <div class="wrapper-footer">
	 <?php
	 include('../footer.php');
	 ?>
	</div><!-- End of wrapper-footer div -->

	
</div>

</body>
</html>
