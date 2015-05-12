<!DOCTYPE html>
<html>
<head>
<title>LWR Clubs and Organizations</title>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
var map;

function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(27.429098, -82.429858),
    zoom: 18,
    mapTypeId: google.maps.MapTypeId.SATELLITE
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  map.setTilt(45);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>	
<script>
$(document).ready(function() {
  $(".js-example-basic-single").select2();
});
</script>
<link rel="STYLESHEET" type="text/css" href="css/lwr.css">
<script type="text/javascript" src="js/lwr.js"></script>
<link href="dist/css/select2.min.css" rel="stylesheet" />
<script src="dist/js/select2.min.js"></script>
<style>
 
   #map-canvas {
        height: 400px;
        margin: 100px;
        padding: 50px
      }
 

</style>

</head>

<body>
	<div id="pagetop">
		<img src="images/LWR%20Logo.gif" style="margin-bottom:-30px;">
<p id='pagetitle'>Find Your Neighbourhood</p>

	</div>
<div>
	<form style="text-align:right; margin: 0 40px 2px 0; font-size:11px;" method="get" name="searchform" action="http://www.google.com/search" target="_blank">
    <input type="hidden" name="sitesearch" value="www.lakewoodranchgov.org" />
    <input onfocus="searchfield_focus(this)" style="width:150px;color:#808080;font-style:italic;margin:0;" 
    type="text" name="as_q" size="20" value="" /><input type="submit" style="margin:0;" value="Search" title="Search" />
	</form>
</div>
<div class="mainmenu">
<!-- all the dropdowns have to explicitly specify a width -->
<ul>
	<li id="nobar"><a href="index.php">
	<img border="0" alt="Home Page" src="images/home.jpg" width="27" height="23"></a></li>
	<li><a  href="IDA.php"
        onmouseover="mopen('ida1')" 
        onmouseout="mclosetime()">IDA</font></a>
        <div id="ida1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
	        <ul class="wide150">
	        	<li><a  href="IDA-board.php">IDA Board</a></li>
	        	<li><p id="nolink">Departments ></p>
	        	<ul class="wide250">
	        		<li><a  href="IDA-admin.php">Administration</a></li>
	        		<li><a  href="IDA-commassoc.php">Community Associations</a></li>
	        		<li><a  href="IDA-finance.php">Finance</a></li>
	        		<li><a  href="IDA-ops.php">Operations</a></li>
	        	</ul>
			</li>
	        </ul>
        </div>
    </li>
    <li><a  href="CDD.php"
        onmouseover="mopen('cdd1')" 
        onmouseout="mclosetime()">CDD</font></a>
        <div id="cdd1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
	        <ul class="wide100">
	        	<li><a  href="x-CDDn.php?number=1">District 1</a></li>
	        	<li><a  href="x-CDDn.php?number=2">District 2</a></li>
	        	<li><a  href="x-CDDn.php?number=4">District 4</a></li>
	        	<li><a  href="x-CDDn.php?number=5">District 5</a></li>
	        	<li><a  href="x-CDDn.php?number=6">District 6</a></li>
	        </ul>
        </div>
    </li>
    <li><a  href="HOA.php"
        onmouseover="mopen('hoa1')" 
        onmouseout="mclosetime()">HOA</a>
        <div id="hoa1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
            <ul>
            	<li><a  href="HOA-SRVA.php">SRVA</a></li>
            	<li><a  href="HOA-CEVA.php">CEVA</a></li>
            	<li><a  href="HOA-GBVA.php">GBVA</a></li>
            </ul>
        </div>
    </li>
    <li><a  href="reservations/">Calendar</a></li>
<li><a  target="blank" href="x-document.php?view=ALL">Document Library</a></li>
    <li><a  href="#" id="nohover"
        onmouseover="mopen('resctr')" 
        onmouseout="mclosetime()">Community Resources</a>
        <div id="resctr" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
            <ul class="wide250">
            	<li><a  href="LWRcontent/documents/NeighborhoodMap.pdf">Find Your Neighborhood</a></li>
            	<li><a  target="blank" href="x-document.php?view=FORMS">Forms and Publications</a></li>
            	<li><a id='me'  href="clubs.php">Clubs and Organizations</a></li>
            </ul>
        </div>
    <li><a  href="#" id="nohover"
        onmouseover="mopen('LWRconn')" 
        onmouseout="mclosetime()">LWR Connection</a>
        <div id="LWRconn" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
            <ul>
<!--			<li><a  target="blank" href="blog/">BLOG</a></li>	-->
            	<li><a  href="links.php">Useful Links</a></li>
            	<li><a  href="LWRcontent/documents/newsletters/current.pdf">e-Newsletter</a></li>
            </ul>
        </div>
    <li id="nobar"><a  href="contactsHome.php">Contact&nbsp;&nbsp;&nbsp;&nbsp;<img border="0" src="images/phone.jpg" width="27" height="22" style="vertical-align:top;"></a>&nbsp;&nbsp;</li>
<!--    <li id="nobar"><a  href="contactsHome.php">Contact</a></li>
	<li id="nobar"><a href="contactsHome.php"><img border="0" src="images/phone.jpg" alt="Contacts" width="27" height="22"></a></li> -->
</ul>
</div>

<div class="pagecontent">
	 
	<div> 
		<h3>
			<select class="js-example-basic-single">
					<option value="27.4291111,-82.4298611">Knoll</option>
					<option value="27.428545,-82.426422,17">Pines</option>
			</select>
		</h3>
	</div>
	
	 <div id="map-canvas"></div>
 

<div class="footer">
	<ul>
		<li id="withbar"><a href="PublicRecords.php">Public Records Disclosure</a></li>
		<li id="withbar"><a href="SiteMap.pdf">Site Map</a></li>
		<li><a href="mailto:webmaster@lwrtownhall.com?subject=Mail From the Website">E-Mail Webmaster</a></li>
	</ul>
	<p align="center"><font face="Tahoma" size="2">© 2012-2015 Lakewood Ranch Inter-District Authority<br>
	Stylized bird logo and the phrase “Lakewood Ranch” are registered service marks of Schroeder-Manatee Ranch, Inc.
	<br>&nbsp;</font></p>

<!---
	<p align="center"><font face="Tahoma" size="2"><a  href="reservations9D/">©</a> 2012-2014 Lakewood Ranch Inter-District Authority
	<br>&nbsp;</font></p>
-->
	</div>

</div>
</body>
</html>