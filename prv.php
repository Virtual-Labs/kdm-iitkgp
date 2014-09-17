<script type="text/javascript">
<!-- Begin
/* This script and many more are available free online at
The JavaScript Source!! http://javascript.internet.com
Created by: Abraham Joffe :: http://www.abrahamjoffe.com.au/ */

/***** CUSTOMIZE THESE VARIABLES *****/

  // width to resize large images to
var maxWidth=500;
  // height to resize large images to
var maxHeight=500;
  // valid file types
var fileTypes=["bmp","gif","png","jpg","jpeg"];
  // the id of the <strong class="highlight">preview</strong> <strong class="highlight">image</strong> tag
var outImage="previewField";
  // what to display when the <strong class="highlight">image</strong> is not valid
var defaultPic="spacer.gif";

/***** DO NOT EDIT BELOW *****/

function <strong class="highlight">preview</strong>(what){
  var source=what.value;
  var ext=source.substring(source.lastIndexOf(".")+1,source.length).toLowerCase();
  for (var i=0; i<fileTypes.length; i++) if (fileTypes[i]==ext) break;
  globalPic=new <strong class="highlight">Image</strong>();
  if (i<fileTypes.length) globalPic.src=source;
  else {
    globalPic.src=defaultPic;
    alert("THAT IS NOT A VALID IMAGEnPlease load an <strong class="highlight">image</strong> with an extention of one of the following:nn"+fileTypes.join(", "));
  }
  setTimeout("applyChanges()",200);
}
var globalPic;
function applyChanges(){
  var field=document.getElementById(outImage);
  var x=parseInt(globalPic.width);
  var y=parseInt(globalPic.height);
  if (x>maxWidth) {
    y*=maxWidth/x;
    x=maxWidth;
  }
  if (y>maxHeight) {
    x*=maxHeight/y;
    y=maxHeight;
  }
  field.style.display=(x<1 || y<1)?"none":"";
  field.src=globalPic.src;
  field.width=x;
  field.height=y;
}
// End -->
</script>







<center> Pre-veiw pic from your drive </center>
<body><div align="center" style="line-height: 1.9em;">

<br>
<input type="file" id="picField" onchange="<strong class="highlight">preview</strong>(this)">
<br>
<img alt="Graphic will <strong class="highlight">preview</strong> here" id="previewField" src="http://i14.photobucket.com/albums/a345/Instar/eye_search_e0.gif">

</div></body>