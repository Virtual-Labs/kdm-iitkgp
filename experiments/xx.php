<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dynamic Drive DHTML Scripts- Local Time script</title>
<link rel="stylesheet" type="text/css" href="../ddincludes/mainstyle.css" />

<style type="text/css">

.bigbox{
border: 1px solid orange;
background-color: lightyellow;
padding: 3px;
margin-bottom: 0.5em;
width: 350px;
}

</style>

<script type="text/javascript">

/***********************************************
* Local Time script- © Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var weekdaystxt=["Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat"]

function showLocalTime(container, servermode, offsetMinutes, displayversion){
if (!document.getElementById || !document.getElementById(container)) return
this.container=document.getElementById(container)
this.displayversion=displayversion
var servertimestring=(servermode=="server-php")? '<? print date("F d, Y H:i:s", time())?>' : (servermode=="server-ssi")? 'December 29, 2011 00:24:43' : '<%= Now() %>'
this.localtime=this.serverdate=new Date(servertimestring)
this.localtime.setTime(this.serverdate.getTime()+offsetMinutes*60*1000) //add user offset to server time
this.updateTime()
this.updateContainer()
}

showLocalTime.prototype.updateTime=function(){
var thisobj=this
this.localtime.setSeconds(this.localtime.getSeconds()+1)
setTimeout(function(){thisobj.updateTime()}, 1000) //update time every second
}

showLocalTime.prototype.updateContainer=function(){
var thisobj=this
if (this.displayversion=="long")
this.container.innerHTML=this.localtime.toLocaleString()
else{
var hour=this.localtime.getHours()
var minutes=this.localtime.getMinutes()
var seconds=this.localtime.getSeconds()
var ampm=(hour>=12)? "PM" : "AM"
var dayofweek=weekdaystxt[this.localtime.getDay()]
this.container.innerHTML=formatField(hour, 1)+":"+formatField(minutes)+":"+formatField(seconds)+" "+ampm+" ("+dayofweek+")"
}
setTimeout(function(){thisobj.updateContainer()}, 1000) //update container every second
}

function formatField(num, isHour){
if (typeof isHour!="undefined"){ //if this is the hour field
var hour=(num>12)? num-12 : num
return (hour==0)? 12 : hour
}
return (num<=9)? "0"+num : num//if this is minute or sec field
}

</script>

</head>

<body>
    
<div class="bigbox"><b>Server Time:</b> <span id="timebox"></span></div>

<div  class="bigbox"><b>Paris:</b> <span id="timebox2"></span></div>
<div  class="bigbox"><b>New York:</b> <span id="timebox3"></span></div>
<div  class="bigbox"><b>Tokyo:</b> <span id="timebox4"></span></div>

<script type="text/javascript">
new showLocalTime("timebox", "server-php", 0, "short")
new showLocalTime("timebox2", "server-ssi", 600, "short")
new showLocalTime("timebox3", "server-ssi", 240, "short")
new showLocalTime("timebox4", "server-ssi", 1080, "short")
</script>

</body>

</html>