var codeName = navigator.appCodeName;
var appName = navigator.appName;
var appVersion = navigator.appVersion;
var platformName = navigator.platform;
var userAgent = navigator.userAgent;
var javaEnabled = navigator.javaEnabled();
var versionMajor = parseInt(navigator.appVersion, 10);

var language = function getLanguage() {

    if (navigator.appName == "Microsoft Internet Explorer") {
        return (navigator.userLanguage);
    } else if (navigator.appName == "Netscape") {
        return (navigator.language);
    } else if (navigator.appName == "Opera") {
        return (navigator.language);
    } else {
        return ("(Not supported)");
    }
}

var versionMinor = function versionMinor() {   
    var appVers = navigator.appVersion;

    var pos, versMinor = 0;

    if ((pos = appVers.indexOf("MSIE")) > -1) {
        versMinor = parseFloat(appVers.substr(pos + 5));
    } else {
        versMinor = parseFloat(appVers);
    }

    return (versMinor);
}

var screenWidth = function screenWidth() {
    if (window.screen) {
        return (screen.width);
    } else {
        return (0);
    }
}

var screenHeight = function screenHeight() {
    if (window.screen) {
        return (screen.height);
    } else {
        return (0);
    }
}

function checkPlatForm() {
    var j3durl;
    var osPlatformName = navigator.platform;
    if (osPlatformName == "Win32") {
        j3durl = "./j3d_jre/x86/windows/j3d-1_5_2-windows-i586.exe";
    } else if (osPlatformName == "Linux x86_64") {
        j3durl="./j3d_jre/x86/linux/j3d-1_5_2-linux-i586.bin";
    } else {
        j3durl="http://java3d.java.net/binary-builds.html";
    }
    return (j3durl);
}

/*
 * if (navigator.userAgent.indexOf("WOW64") != -1 || 
    navigator.userAgent.indexOf("Win64") != -1 ){
   alert("This is a 64 bit OS");
} else {
   alert("Not a 64 bit OS");
}

http://stackoverflow.com/questions/1741933/detect-64-bit-or-32-bit-windows-from-user-agent-or-javascript
 */