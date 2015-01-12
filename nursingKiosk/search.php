<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
function callCommand (){
exec ("osk.exe");
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Touch Screen-School of Nursing: UNC Directory</title>
  

 <link type="text/css" rel="stylesheet" href="style.css" />
 
  
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="fadeslideshow.js"></script>

<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, { "basePath": "/", "googleanalytics": { "trackOutgoing": 1, "trackMailto": 1, "trackDownload": 1, "trackDownloadExtensions": "7z|aac|arc|arj|asf|asx|avi|bin|csv|doc|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls|xml|z|zip" } });
//--><!]]>
</script>
<script type="text/javascript">
idleTime=0;
mouseTrueMove=false;
$(document).ready(function(){
var idleInterval =  setInterval ("timerIncrement()", 1000);

$(this).mousemove(function(e){

idleTime = 0;



});
});
function timerIncrement(){
idleTime = idleTime +1;
if (idleTime>60){
nextpage();
}

}
function nextpage(){
document.location.href="testIdle.html";
}
</script>
<script>
$(document).ready(function(){
$("#unc_directory_web").click(function(){
$("#unc_directory_frame").load(callCommand);
});
});
</script>
</head>

<body  id="touch-uncdirectory" style="background: #e7e7e7 url(img/wallpapers.jpg) no-repeat; background-attachment: fixed; width:1920px;">

   
<div id="touch-wrapper">

    
        <div id="touch-header">
            <div id="touch-header-left">&nbsp;</div>
            <div id="touch-header-right">&nbsp;</div>
        </div>
        
        
                   <div id="touch-content-header">
                           </div> <!-- /#content-header -->
                 
        <div id="touch-content">	
			<div id="touch-leftside">
			<div id="touch-leftside-homepage"> <div id="node-1542" class="node node-type-page"><div class="node-inner">

  
  
  
  
 
<div class="content">
   <div class="view-header">
<div id="touch-title">UNC Directory</div>
</div>
<div id="unc_directory_frame"><iframe id="unc_directory_web" src="https://itsapps.unc.edu/dir/dirSearch/view.htm" width="1336" height="1000"></iframe></div>
<!--<div class="uncdirectory-searchbox">
<div class ="searchbox-content">
<div class="instruction">
<p>Enter a name or ONYEN to find people </p>
</div>
<div class="box">
<p><input id="searchbox" type="text" size="30"/>
&nbsp;

<input id="clickbutton" type="button" value="Search" onclick="return googleSearch()"/></p>
</div>
<div class="note">
<p>Note: search limited to 500 results.</p>
</div>
</div>
</div>-->
  </div>

  
</div></div> <!-- /node-inner, /node -->
 </div>
			</div>
			
			<div id="touch-rightside"><div id="block-block-33" class="block block-block region-odd odd region-count-1 count-5"><div class="block-inner">


  
  <div class="content">
    <div id="touch-rightside-inner2"><img alt="touchscreen logo" src="img/logo.jpg" /></div>
  </div>

  
</div></div> <!-- /block-inner, /block -->
<div id="block-block-29" class="block block-block region-even even region-count-2 count-6"><div class="block-inner">


  
  <div class="content">
    <div id="touch-rightside-inner">
<ul class="touch-nav">
<li class="nav-news"><a href="index.html">Homepage</a></li>
<li class="nav-news"><a href="information.html">Information</a></li>
<li class="nav-news"><a href="events.html">Events</a></li>
<li class="nav-directory"><a href="video.html">Video</a></li>
<!--<li class="nav-staff-directory"><a href="/touchscreen/directory-staff">Staff</a></li>
<li class="nav-map"><a href="/touchscreen/touch-map">Map</a></li>-->
</ul>
</div>
  </div>

  
</div></div> <!-- /block-inner, /block -->
<div id="block-block-38" class="block block-block region-odd odd region-count-3 count-7"><div class="block-inner">


  
  <div class="content">
  <div id="touch-rightside-inner5"><img src="img/touch-screen-nav.png" alt="SILS logo" /></div>
   
  </div>

  
</div></div> <!-- /block-inner, /block -->
<div id="block-block-34" class="block block-block region-even even region-count-4 count-8"><div class="block-inner">


  
  <div class="content">
    <!--<div id="touch-rightside-inner3"><img alt="SILS logo" src="http://sils.unc.edu/sites/all/themes/sils/img/touch-silslogo.png" /></div>-->
  </div>

  
</div></div> <!-- /block-inner, /block -->
 </div>
		</div>
</div>

</body>
</html>
