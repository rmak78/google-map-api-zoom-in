
<!DOCTYPE html>
<html>
<head>
<title>LWR Clubs and Organizations</title><script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>


<link rel="STYLESHEET" type="text/css" href="css/lwr.css">
<link href="dist/css/select2.min.css" rel="stylesheet" />
<link href="dist/css/select2.css" rel="stylesheet" />
<script>
var map;
function initialize() {
  var userlat = 27.429098;
  var userlong = -82.429858;
  var mapOptions = {
    center: new google.maps.LatLng(userlat,userlong),
    zoom: 18,
    mapTypeId: google.maps.MapTypeId.SATELLITE
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  map.setTilt(45);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="dist/js/select2.min.js"></script>

<script type="text/javascript" src="js/lwr.js"></script>	
<script>
$(document).ready(function() {
  $(".js-example-basic-single").select2();
});
</script>
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
	 
	<div class="pagetable"> 
		
				<select  id="select_neighbour" name="select_neighbour"  class="js-example-basic-single select" style="width:500px; height:100px;">
							<option value='27.429098,-82.429858'> Knoll </option>
							<option value='27.428545,-82.426422' > Pines </option>
							<option value='27.429611,-82.422620' > Glen </option>
							<option value='27.428716,-82.419680' > Crest </option>
							<option value='27.430272,-82.415583' > Strand </option>
							<option value='27.426653,-82.409745' > Trails </option>
							<option value='27.422728,-82.406354' > Vistas </option>
							<option value='27.428367,-82.408286' > Gardens </option>
							<option value='27.426462,-82.405281' > Run </option>
							<option value='27.429738,-82.405238' > Haven </option>
							<option value='27.427338,-82.403693' > Bend </option>
							<option value='27.423193,-82.402702' > Rivers </option>
							<option value='27.429474,-82.400746' > Crossings </option>
							<option value='27.427074,-82.400287' > Chase </option>
							<option value='27.423015,-82.400028' > Fields </option>
							<option value='27.425951,-82.397096' > Dale </option>
							<option value='27.428886,-82.391747' > Walk </option>
							<option value='27.429932,-82.387864' > Terrace </option>
							<option value='27.425159,-82.388148' > Banks </option>
							<option value='27.422963,-82.391776' > Preserve </option>
							<option value='27.419721,-82.397733' > Ravines </option>
							<option value='27.417553,-82.406359' > Lacantera </option>
							<option value='27.416735,-82.412171' > Belmont </option>
							<option value='27.414230,-82.407026' > Kingsmill </option>
							<option value='27.413467,-82.408979' > Keswick </option>
							<option value='27.411345,-82.400586' > Presidio </option>
							<option value='27.411525,-82.407571' > Palmers Creek </option>
							<option value='27.410298,-82.404066' > Legends Walk </option>
							<option value='27.407410,-82.400880' > Riviera </option>
							<option value='27.407973,-82.404988' > Blythefield </option>
							<option value='27.406263,-82.403493' > Mizner Reserve </option>
							<option value='27.404757,-82.404413' > Montclair </option>
							<option value='27.403864,-82.402113' > Siena </option>
							<option value='27.402149,-82.402600' > Orchid Island </option>
							<option value='27.402404,-82.406769' > Vilamoura </option>
							<option value='27.398652,-82.402687' > Ashland </option>
							<option value='27.399215,-82.407027' > Portmarnock </option>
							<option value='27.400595,-82.412748' > Gleneagles </option>
							<option value='27.396202,-82.403434' > Sandhills </option>
							<option value='27.396586,-82.406277' > Twin Hills </option>
							<option value='27.398859,-82.415077' > Oakmont </option>
							<option value='27.391785,-82.401164' > Laurel Valley </option>
							<option value='27.392118,-82.406594' > Canterbury </option>
							<option value='27.393267,-82.411856' > Westchester </option>
							<option value='27.388059,-82.400274' > Miramar </option>
							<option value='27.389463,-82.404328' > Whitemarsh </option>
							<option value='27.387395,-82.406138' > Boca Grove </option>
							<option value='27.390177,-82.408780' > Weston </option>
							<option value='27.390407,-82.412458' > Quail Creek </option>
							<option value='27.396588,-82.419103' > St. Georges </option>
							<option value='27.400419,-82.419678' > Spyglass </option>
							<option value='27.388976,-82.421864' > Cove </option>
							<option value='27.398735,-82.422555' > Augusta </option>
							<option value='27.394393,-82.425116' > Pointe </option>
							<option value='27.388517,-82.429919' > Sound </option>
							<option value='27.400039,-82.426440' > Muirfield </option>
							<option value='27.392655,-82.432655' > Moorings </option>
							<option value='27.398736,-82.429663' > Watercrest </option>
							<option value='27.394777,-82.434605' > Lofts </option>
							<option value='27.404229,-82.417992' > Highfield </option>
							<option value='27.403583,-82.421875' > Silverwood </option>
							<option value='27.401220,-82.437439' > Lake Vista </option>
							<option value='27.404745,-82.430548' > Oaks </option>
							<option value='27.408330,-82.419618' > Greystone </option>
							<option value='27.408501,-82.421208' > Edenmore </option>
							<option value='27.410768,-82.415155' > Stoneridge </option>
							<option value='27.409392,-82.427436' > Wexford </option>
							<option value='27.410402,-82.431301' > Meadow </option>
							<option value='27.412577,-82.412023' > Teal Creek </option>
							<option value='27.412252,-82.423678' > Lismore </option>
							<option value='27.412328,-82.426276' > Grove </option>
							<option value='27.413013,-82.430340' > Hammock </option>
							<option value='27.413262,-82.419554' > Thornhill </option>
							<option value='27.414902,-82.416443' > Brier Creek </option>
							<option value='27.415946,-82.430659' > Bluffs </option>
							<option value='27.416005,-82.420971' > Ridge </option>
							<option value='27.416216,-82.414598' > Dominion </option>
							<option value='27.420332,-82.427780' > Woods </option>
							<option value='27.421380,-82.427759' > Lakes </option>
							<option value='27.422258,-82.423721' > Glades </option>
							<option value='27.424678,-82.425629' > Park </option>
							<option value='27.425878,-82.424406' > Green </option>
							<option value='27.426584,-82.422259' > Place </option>
							<option value='27.427174,-82.418287' > Forest </option>
							<option value='27.429345, -82.431919' > Hollow </option>
	</select>
<script>
$("#select_neighbour").change(function() {
           
            ///alert($('option:selected', $(this)).val());
			 var userlatlong  = $('option:selected', $(this)).val();
			 var coords = userlatlong.split(",");
         	 var userlat =  parseFloat(coords[0]);
			 var userlong =  parseFloat(coords[1]);
			 var newLatLng = new google.maps.LatLng(userlat, userlong);

			//marker.setPosition(newLatLng);
			map.setCenter(newLatLng)
			 
});
</script>
      

		
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